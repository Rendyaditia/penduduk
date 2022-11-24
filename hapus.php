<?php
include("koneksi.php");
if(isset($_GET['simpan']));
 $kode=$_GET['id'];

$sql ="DELETE FROM tb_rendy3nov WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("GAGAL MENGHAPUS");
}
?>