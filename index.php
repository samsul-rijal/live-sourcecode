<?php
$host = "localhost";
$username = "root";
$password = "admin";
$dbname = "test_db";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query SQL untuk mengambil data
$sql = "SELECT * FROM users"; // Ganti sesuai dengan tabel dan kolom yang ada
$result = $conn->query($sql);

// Mengecek apakah ada data
if ($result->num_rows > 0) {
    // Menampilkan data untuk setiap baris
    while($row = $result->fetch_assoc()) {
        echo " - Nama: " . $row["name"].  "<br>";
    }
} else {
    echo "Tidak ada data ditemukan";
}

// Menutup koneksi
$conn->close();
?>
