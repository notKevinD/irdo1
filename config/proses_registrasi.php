<?php
session_start();
require_once "database.php"; // Import koneksi

// Cek metode request (hanya POST yang diizinkan)
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("<script>alert('Gagal mendaftar'); window.history.back();</script>");
}

// Cek CSRF Token
if (!isset($_POST["csrf_token"]) || $_POST["csrf_token"] !== $_SESSION["csrf_token"]) {
    die("<script>alert('Gagal Mendaftar'); window.history.back();</script>");
}

// Ambil dan bersihkan data dari form
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

$nama_tim     = sanitize($_POST["nama_tim"]);
$asal_sekolah = sanitize($_POST["asal_sekolah"]);
$anggota1     = sanitize($_POST["anggota1"]);
$anggota2     = sanitize($_POST["anggota2"] ?? null);
$anggota3     = sanitize($_POST["anggota3"] ?? null);
$pembimbing   = sanitize($_POST["pembimbing"]);
$nomor_hp     = sanitize($_POST["nomor_hp"]);
$email        = sanitize($_POST["email"]);
$kategori     = sanitize($_POST["kategori"]);

// **1️⃣ Validasi Upload Bukti Pembayaran**
$upload_dir = "uploads/";
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

$file = $_FILES["bukti_pembayaran"];
$file_name = basename($file["name"]);
$file_tmp  = $file["tmp_name"];
$file_size = $file["size"];
$file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
$file_type = mime_content_type($file_tmp);

// **2️⃣ Validasi ekstensi & MIME type gambar**
$allowed_extensions = ["jpg", "jpeg", "png", "gif"];
$allowed_mime_types = ["image/jpeg", "image/png", "image/gif"];

if (!in_array($file_ext, $allowed_extensions) || !in_array($file_type, $allowed_mime_types)) {
    die("<script>alert('Hanya file gambar (JPG, PNG, GIF) yang diperbolehkan!'); window.history.back();</script>");
}

// **3️⃣ Validasi ukuran maksimum (2MB)**
if ($file_size > 2 * 1024 * 1024) {
    die("<script>alert('Ukuran file terlalu besar! Maksimal 2MB.'); window.history.back();</script>");
}

// **4️⃣ Simpan file dengan nama unik**
$new_file_name = uniqid("bukti_", true) . "." . $file_ext;
$file_path = $upload_dir . $new_file_name;

if (!move_uploaded_file($file_tmp, $file_path)) {
    die("<script>alert('Gagal upload bukti pembayaran!'); window.history.back();</script>");
}

// **5️⃣ Simpan data ke database (Prepared Statements)**
$stmt = $conn->prepare("INSERT INTO registrasi (nama_tim, asal_sekolah, anggota1, anggota2, anggota3, pembimbing, nomor_hp, email, kategori, bukti_pembayaran) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $nama_tim, $asal_sekolah, $anggota1, $anggota2, $anggota3, $pembimbing, $nomor_hp, $email, $kategori, $new_file_name);

if ($stmt->execute()) {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        let modal = document.createElement('div');
        modal.innerHTML = `
            <div style='position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%);
                        background-color: #283371; color: white; padding: 20px; border-radius: 5px;
                        text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.3); z-index: 9999;'>
                <p style='margin: 0; font-size: 18px; font-weight: bold;'>Registration Complete</p>
                <button onclick='window.location.href=\"../id/main\"' style='margin-top: 10px; background: white; 
                        color: #283371; border: none; padding: 8px 12px; border-radius: 5px; cursor: pointer;'>Back</button>
            </div>
        `;
        document.body.appendChild(modal);
    });
</script>";
} else {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        let modal = document.createElement('div');
        modal.innerHTML = `
            <div style='position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%);
                        background: salmon; color: white; padding: 20px; border-radius: 5px;
                        text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.3); z-index: 9999;'>
                <p style='margin: 0; font-size: 18px; font-weight: bold;'>Registration Failed</p>
                <button onclick='window.history.back()' style='margin-top: 10px; background: white; 
                        color: salmon; border: none; padding: 8px 12px; border-radius: 5px; cursor: pointer;'>Back</button>
            </div>
        `;
        document.body.appendChild(modal);
    });
</script>";
}

$stmt->close();
$conn->close();
?>

