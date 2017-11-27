
<form action="modules/nguoidung/xuly.php" method="post" enctype="multipart/form-data" >
<div class="left">
<table width="305" height="400" border="0">
  <tr>
    <td colspan="2"><div align="center"><p style="color:#00F">Thêm tài khoản người dùng</p></div></td>
  </tr>
  <tr>
    <td width="114"><div align="center"><p style="color:#00F">Tên Đăng Nhập</p></div></td>
    <td width="181"><div align="center"><input name="tendangnhap" type="text" />
	</div></td>
  </tr>
  <tr>
    <td><div align="center"><p style="color:#00F">Mật Khẩu</p></div></td>
    <td><div align="center"><input type="password" name="matkhau"/></div></td>
  </tr>
  
  <tr>
    <td><div align="center"><p style="color:#00F">Email</p></div></td>
    <td><div align="center"><input type="email" name="email" /></div></td>
  </tr>
   <tr>
    <td><div align="center"><p style="color:#00F">SDT</p></div></td>
    <td><div align="center"><input type="number" name="SDT" /></div></td>
  </tr>
<tr>
    <td><div align="center"><p style="color:#00F">Quyền</p></div></td>
    <td><div align="center"><select name="quyen">
    <option value="1">Admin</option>
    <option value="" selected="selected">Người dùng</option>
    </select></div>
    </td>
  </tr>
  <tr>
    <td width="114">
      <input type="submit" name="them" id="them" value="      Thêm      ">
    </td>
    <td width="181"><input type="submit" name="reset" id="reset" value="      Reset     " /></td>
  </tr>
  
</table>
</div>
</form>
