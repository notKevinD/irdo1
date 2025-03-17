<?php
$servername = "localhost"; // Ganti sesuai dengan server database
$username = "root"; // Ganti jika ada username database
$password = ""; // Ganti jika ada password database
$dbname = "irdo"; // Sesuaikan dengan nama database

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data
$sql = "SELECT * FROM registrasi ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Data Registrasi</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Tim</th>
                <th>Asal Sekolah</th>
                <th>Anggota 1</th>
                <th>Anggota 2</th>
                <th>Anggota 3</th>
                <th>Pembimbing</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Kategori</th>
                <th>Bukti Pembayaran</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama_tim']}</td>
                        <td>{$row['asal_sekolah']}</td>
                        <td>{$row['anggota1']}</td>
                        <td>{$row['anggota2']}</td>
                        <td>{$row['anggota3']}</td>
                        <td>{$row['pembimbing']}</td>
                        <td>{$row['nomor_hp']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['kategori']}</td>
                        <td><a href='uploads/{$row['bukti_pembayaran']}' target='_blank'>Lihat</a></td>
                        <td>{$row['created_at']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='12' class='text-center'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php
// Tutup koneksi
$conn->close();
?>
