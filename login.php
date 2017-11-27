<?php 
$errTen  = $errMatKhau = ""; // rỗng
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(empty($_POST['tendangnhap']) == false) {
// do something;
} else {
$errTen = "Họ tên không được rỗng";

}


if(empty($_POST['matkhau']) == false) {
// do something;
} else {
$errMatKhau = "Mật khẩu không được rỗng";
}

}
	include("modules/config.php");
	session_start();
	if (isset($_POST['dangnhap'])){
		$tendangnhap=$_POST['tendangnhap'];
		$matkhau=$_POST['matkhau'];
	
		$sql=" select * from users where tendangnhap='$tendangnhap' and matkhau = '$matkhau'  ";
		$ketqua = mysql_query($sql);
		$st=mysql_fetch_array($ketqua);
		if (mysql_num_rows($ketqua)>0){
			
			session_start();
			$_SESSION["tendangnhap"]=$tendangnhap;
			if($st[5]==1)
			{
   				header("location: index.php");
				}
			else 
			{
				header("location: member1.php");  
			}
		}
		else if(isset ($_POST["quaylai"])){
			session_destroy();
			header("location:../index.php");
		
		
	}
	if(isset($_POST['dangki'])){
		header("location: XuLyDangKy.php");
	}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập Hệ thống</title>
</head>
<body style="background-color: while">
        
        <form method="POST" action="login.php">
          <table style="width: 480px; margin: 0 auto; margin-top:100px; background-color: #666">
            <tr>
              <td colspan="3" align="center">ĐĂNG NHẬP HỆ THỐNG</td>
            </tr>
            <tr>
              <td width="80">Tên đăng nhập </td>
              <td colspan="2"><input type="text" name="tendangnhap" />*<?php echo $errTen; ?><br /></td>
            </tr>
            <tr>
              <td>Mật khẩu </td>
              <td colspan="2"><input type="password" name="matkhau" />*<?php echo $errMatKhau; ?><br /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="102"><input type="submit" name="dangnhap" value="Đăng nhập" /></td>
              <td width="70"><input type="submit" name="quaylai" value="Thoát" /></td>
            </tr>     
          </table>
    </form> 
    <form method="POST" action="dangky.php">
<table style="width: 480px; margin: 0 auto; margin-top:0px; background-color: #666">
                      <tr>
              <td width="112">&nbsp;</td>
              <td width="176"><input type="submit" name="dangki" value="  Đăng kí   " /></td>
  </tr>
                    </table>
                    </form>
</body>
</html>