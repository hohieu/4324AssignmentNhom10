<?php
	$sql = "select * from `users` ";
	$nguoidung = mysql_query($sql);
?>
<div class="right">
<table width="567" height="134" border="1">
  <tr>
    <td width="32"><div align="center">ID</div></td>
    <td width="104"><div align="center">Tên Đăng Nhập</div></td>
    <td width="65"><div align="center">Mật Khẩu</div></td>
   <td width="47"><div align="center">Email</div></td>
    <td width="47"><div align="center">SDT</div></td>
    <td width="47"><div align="center">Quyền</div></td>
    <td colspan="2"><div align="center"><strong>Quản lý</strong></div></td>
  </tr>
  <?php 


  	while( $dong= mysql_fetch_array($nguoidung)){
  ?>
  <tr>
    <td><div align="center"><?php echo $dong["id"] ?></div></td>
    <td><div align="center"><?php echo $dong["tendangnhap"]; ?></div></td>
    <td><div align="center"><?php echo $dong["matkhau"]; ?></div></td>
    <td><div align="center"><?php echo $dong["email"];?></div></td>
    <td><div align="center"><?php echo $dong["SDT"];?></div></td>
    <td><div align="center">
	<?php 
					if($dong["quyen"]==1) 
						echo "Admin";
					else{ 
						echo "Người Dùng";
	 					} 
	?>
     </div>
     </td>
    <td width="71"><div align="center"><a href="index.php?quanly=nguoidung&ac=sua&id=
	<?php 
	echo $dong["id"] ;?>">
      <p>sửa</p>
      </a>
    </div></td>
    <td width="78"><div align="center">
    <a href="modules/nguoidung/xuly.php?ac=xoa&id=<?php echo $dong["id"]?>">
  <p>xóa
  </p>
    </a>
    </div></td>
  </tr>
  <?php

	}
  ?>
</table>
</div>
