<?php
$koneksi = new mysqli('localhost', 'root', '', 'tugas') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $Id_Pelanggan = $_POST['Id_Pelanggan'];
    $NmPesanan = $_POST['NmPesanan'];
    $Jp = $_POST['Jp'];
    $Harga = $_POST['Harga'];
    $koneksi->query("INSERT INTO kopi (Id_Pelanggan, NmPesanan, Jp, Harga) values ('$Id_Pelanggan','$NmPesanan','$Jp','$Harga')");

    header('location:coffe.php');
}

if (isset($_GET['Id_Pelanggan'])) {
    $Id_Pelanggan = $_GET['Id_Pelanggan'];
    $koneksi->query("DELETE FROM kopi where Id_Pelanggan = '$Id_Pelanggan'");
    header("location:coffe.php");
}

if (isset($_POST['edit'])) {
    $Id_Pelanggan = $_POST['Id_Pelanggan'];
    $NmPesanan = $_POST['NmPesanan'];
    $Jp = $_POST['Jp'];
    $Harga = $_POST['Harga'];

    $koneksi->query("UPDATE kopi SET Id_Pelanggan='$Id_Pelanggan',NmPesanan='$NmPesanan',Jp='$Jp',Harga='$Harga'WHERE Id_Pelanggan=$Id_Pelanggan");
    header("location:coffe.php");
}