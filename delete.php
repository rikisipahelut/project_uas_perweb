<?php 
require 'functions.php';
if (isset($_GET["id"])) {
	if (hapus($_GET)> 0) {
	echo "<script>alert('success')</script>";
	echo "<meta http-equiv='refresh' content='0.5;url=details.php'>"; 
	}
}




 ?>