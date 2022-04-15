<?php
include('koneksi.php');
 
$id = $_GET['id'];
 
$query = mysqli_query($connect, "DELETE FROM user_menu WHERE id='$id'");
 
if($query){
 echo 'Data berhasil dihapus. Klik <a href="index.php">di sini</a> untuk ke halaman utama.';
}else{
 echo 'Data gagal diinput. Klik <a href="index.php">di sini</a> untuk ke halaman utama.';
}
