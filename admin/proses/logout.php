<?php 
//untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
session_start();
// membuang variabel admin
unset($_SESSION['admin']);
//jika telah melakukan logout, maka session kembali masuk sebagai admin, dan akan masuk ke index.php
if(!isset($_SESSION['admin'])){
	header('location:../index.php');
}
?>