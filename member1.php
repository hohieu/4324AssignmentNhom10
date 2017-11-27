<?php
	include("modules/config.php");
session_start();
	if($_SESSION["tendangnhap"]==""){
		header("location: login.php");
		exit();
	}
	$tendangnhap=$_SESSION["tendangnhap"];
?>
	<h1 style=" margin-left: 100px">THÔNG TIN TÀI KHOẢN NGƯỜI DÙNG</h1>
	<table width="567" style="margin-left: 100px;" border="dark" >
	<tr >
    
    <td width="102"><div align="center"><strong>ID</strong></div></td>
    <td width="89"><div align="center"><strong>Tên </strong></div></td>
    <td width="84"><div align="center"><strong>Mật Khẩu</strong></div></td>
    
    <td width="66"><div align="center"><strong>Email</strong></div></td>
    <td width="66"><div align="center"><strong>SĐT</strong></div></td>
    <td width="66"><div align="center"><strong>Quyền</strong></div></td>
  </tr>
	<?php
	$sql = " select * from users where tendangnhap = '$tendangnhap' ";
	$ketqua = mysql_query($sql);
	if($ketqua==false)
	{
		die(mysql_error());
	}
	while ($i=mysql_fetch_array($ketqua)) { 
		?>
		<tr>
    <td><div align="center"><?php echo $i["id"]; ?></div></td>
    <td><div align="center"><?php echo $i["tendangnhap"]; ?></div></td>
    <td><div align="center"><?php echo $i["matkhau"]; ?></div></td>
    
    <td><div align="center"><?php echo $i["email"]; ?></div></td>
    <td><div align="center"><?php echo $i["SDT"]; ?></div></td>
    <td><div align="center"><?php if($i["quyen"]==1) echo "Admin"; else{ echo "Người Dùng";} ?></div></td>
        <tr>
          <td colspan="6" width="102" ><a style="float:right" href=login.php><p>Quay lại
  </p></a></td>
    </table>
    <?php
	}
	?>
