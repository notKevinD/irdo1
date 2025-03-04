<?php
require_once "database.php"; // Import koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_tim      = $_POST["nama_tim"];
    $asal_sekolah  = $_POST["asal_sekolah"];
    $anggota1      = $_POST["anggota1"];
    $anggota2      = $_POST["anggota2"] ?? null;
    $anggota3      = $_POST["anggota3"] ?? null;
    $pembimbing    = $_POST["pembimbing"];
    $nomor_hp      = $_POST["nomor_hp"];
    $email         = $_POST["email"];
    $kategori      = $_POST["kategori"];

    // Upload file bukti pembayaran
    $upload_dir = "../uploads/";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_name = basename($_FILES["bukti_pembayaran"]["name"]);
    $file_tmp  = $_FILES["bukti_pembayaran"]["tmp_name"];
    $file_size = $_FILES["bukti_pembayaran"]["size"];
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_type = mime_content_type($file_tmp);

    // Daftar ekstensi & MIME type gambar yang diizinkan
    $allowed_extensions = ["jpg", "jpeg", "png", "gif"];
    $allowed_mime_types = ["image/jpeg", "image/png", "image/gif"];

    // Validasi ekstensi
    if (!in_array($file_ext, $allowed_extensions) || !in_array($file_type, $allowed_mime_types)) {
        echo "<script>alert('Hanya file gambar (JPG, PNG, GIF) yang diperbolehkan!'); window.history.back();</script>";
        exit;
    }

    // Validasi ukuran maksimum 2MB
    if ($file_size > 2 * 1024 * 1024) { // 2MB
        echo "<script>alert('Ukuran file terlalu besar! Maksimal 2MB.'); window.history.back();</script>";
        exit;
    }

    // Simpan file dengan nama unik
    $new_file_name = uniqid("bukti_", true) . "." . $file_ext;
    $file_path = $upload_dir . $new_file_name;

    if (move_uploaded_file($file_tmp, $file_path)) {
        $bukti_pembayaran = $new_file_name;

        // Simpan ke database
        $stmt = $conn->prepare("INSERT INTO registrasi (nama_tim, asal_sekolah, anggota1, anggota2, anggota3, pembimbing, nomor_hp, email, kategori, bukti_pembayaran) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $nama_tim, $asal_sekolah, $anggota1, $anggota2, $anggota3, $pembimbing, $nomor_hp, $email, $kategori, $bukti_pembayaran);

        if ($stmt->execute()) {
            echo "<script>alert('Registrasi berhasil!'); window.location.href='../views/homePage.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Gagal upload bukti pembayaran!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Akses ditolak!'); window.history.back();</script>";
}
?>
