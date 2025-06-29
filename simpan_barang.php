<?php
include 'koneksi.php';

$nama = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$sql = "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama', '$stok', '$harga')";
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>