<?php
	$sql = "select * from users where id='$_GET[id]'";
	$nguoidung = mysql_query($sql);
	$dong = mysql_fetch_array($nguoidung);
?>
<form action="modules/nguoidung/xuly.php?id=<?php echo $dong["id"]?>" method="post" enctype="multipart/form-data" >
<div class="left">
<table width="305" height="400" border="0">
  <tr>
    <td colspan="2"><div align="center">Sửa tài khoản</div></td>
  </tr>
  <tr>
    <td width="114"><div align="center">Tên Đăng Nhập</div></td>
    <td width="181"><div align="center"><input type="text" name="tendangnhap" value="<?php echo $dong["tendangnhap"]; ?>" /></div></td>
  </tr>
  <tr>
    <td><div align="center">Mật Khảu</div></td>
    <td><div align="center"><input type="password" name="matkhau" value="<?php echo $dong["matkhau"]?>"/></div></td>
  </tr>
 
  <tr>
    <td><div align="center">Email</div></td>
    <td><div align="center">
      <input type="email" name="email" value="<?php echo $dong["email"]?>" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Điện Thoại</div></td>
    <td><div align="center"><input type="number" name="SDT" value="<?php echo $dong["SDT"] ?>"/></div></td>
  </tr>
   <tr>
    <td><div align="center">Quyền</div></td>
    <td><div align="center"><select name="quyen"><?php if($dong["quyen"] ==1){ ?><option value="1" selected="selected">Admin</option><option value="">Người dùng</option>
<?php } else { ?><option value="1" >Admin</option><option value=""selected="selected">Người dùng</option><?php } ?></select></div></td>
  </tr>
  <tr>
    <td width="114">
      <input type="submit" name="sua" id="sua" value="      Sửa      ">
    </td>
    <td width="181">
      <input type="submit" name="reset" id="reset" value="      Reset     ">
   </td>
  </tr>
</table>
</div>
</form>
