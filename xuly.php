<?php
	include("../config.php");
	$tendangnhap = $_POST["tendangnhap"];
	$matkhau = $_POST["matkhau"];	
	$email = $_POST["email"];
	$SDT = $_POST["SDT"];
	$quyen = $_POST["quyen"];
	$id = $_GET["id"];
	if(isset($_POST["them"])){
		
		$sql = "insert into users(tendangnhap,matkhau,email,SDT,quyen) values('$tendangnhap','$matkhau','$email','$SDT','$quyen')";
		mysql_query($sql);
			  header("location: ../../index.php?quanly=nguoidung&ac=them");
	}else if(isset($_POST["sua"])){
		$sql = "UPDATE `users` SET `tendangnhap`='$tendangnhap',`matkhau`='$matkhau',`email`='$email',`SDT`='$SDT',`quyen`='$quyen' WHERE `id`='$id'";
		mysql_query($sql);
		 header("location: ../../index.php?quanly=nguoidung&ac=sua&id=".$id);
	} else {
		$sql = "delete from users where id= '$id'";
		 mysql_query($sql);
		 header("location: ../../index.php?quanly=nguoidung&ac=them");
	}


?>zz	z	