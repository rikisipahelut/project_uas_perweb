<?php 
$conn=mysqli_connect("localhost","root","","menu");
	function insert ($post){
	global $conn;
	$judul=$post['judul'];
    $jumlah=$post['jumlah'];
    $insert ="INSERT INTO pesanan VALUES('','$judul','$jumlah')";
    mysqli_query($conn,$insert);

    return mysqli_affected_rows($conn);
	}

	function select(){
		global $conn;
		$query = "SELECT * FROM pesanan";
		$sql=mysqli_query($conn,$query);
		$result=[];
		while ($fetch=mysqli_fetch_assoc($sql)) {
		  $result[]=$fetch;
		}

		return $result;
	}

	function hapus($data){
		// var_dump($data);
		global $conn;
		$id = $data["id"];
		$hapus = "DELETE FROM pesanan WHERE id='$id'";
		$sql = mysqli_query($conn,$hapus);

		return mysqli_affected_rows($conn);
	}

	function ubah($post,$get){
		global $conn;
		$jumlah=$post['jumlah'];
		$id=$get;
		// var_dump($jumlah);
		// var_dump($id);

		$query = "UPDATE pesanan SET jumlah = $jumlah WHERE id=$id";
		$result = mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
	}

	function order($post){
		global $conn;
		$nama= $post["nama_pemesan"];
		$meja= $post["meja_pemesan"];
		$pesanan=htmlspecialchars($post["pesanan"]);

		 $insert ="INSERT INTO dapur VALUES('','$nama','$meja','$pesanan','')";
		 mysqli_query($conn,$insert);

		 return mysqli_affected_rows($conn);


	}

	function status_pesan($get){
		global $conn;
		$result=where($get);
		$id=$result["id"];
		$nama_pemesan=$result["nama_pemesan"];
		$no_meja=$result["no_meja"];
		$pesanan=$result["pesanan"];
		$status="dikerjakan";

		$query ="UPDATE dapur SET nama_pemesan='$nama_pemesan',no_meja='$no_meja',pesanan='$pesanan',status='$status'WHERE id='$id'";
		$sql=mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);

	}

	function where($get){
		global $conn;
		$id=$get["id"];
		$query="SELECT * FROM dapur WHERE id=$id";
		$sql=mysqli_query($conn,$query);
		$result=mysqli_fetch_assoc($sql);

		
		return $result;
	}

	function login($post){
	global $conn;
	$username=$post["username"];
	$password=$post["password"];

	$query="SELECT * FROM admin WHERE username='$username'";
	$result=mysqli_query($conn,$query);
	if (mysqli_num_rows($result)==1) {
		$row=mysqli_fetch_assoc($result);

		if ($password==$row["password"]) {
			$_SESSION["login"]=true;
			header("Location:dasbor.php?user=$username");
			exit;
		}
	}
	return false;

}

	function hapus_cek(){
		global $conn;
		$query="DELETE FROM dapur WHERE status='dikerjakan'";
		$result=mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);

	}

 ?>