	<?php
    if(isset($_GET['quanly'])){ 
	$tam= $_GET['quanly'];
	}
	else{
		$tam="";
	}
	if($tam == "thongtin")
	{?>
    <div id="menu" style="background-color: #ECECEC;">
		<a href="login.php?ac=thoat">
      <div id="boxchucnang">
        <img src="img/Exit.png" width="48" height="48">
        <p>thoát</p>
      </div>
      </a>
      </div>
	<?php	}
	else {
		?>
<div id="menu" style="background-color: #ECECEC;">
	<a href="index.php?quanly=loaitin&ac=them">
      <div id="boxchucnang"style="margin-left:20px">
        <img src="img/danhmuc.png" width="48" height="48"style="margin-left:20px" >
        <p  style="margin-left:5px">quản lý loại tin </p> 
      </div>
    </a>
    <a href="index.php?quanly=baiviet&ac=them">
      <div id="boxchucnang"style="margin-left:20px">
        <img src="img/baiviet.jpg"width="48" height="48"style="margin-left:20px">
        <p style="margin-left:5px">quản lý bài viết </p>    
      </div> 
      </a>
      <a href="index.php?quanly=nguoidung&ac=them">
      <div id="boxchucnang"style="margin-left:20px">
        <img src="img/quangcao.png" width="48" height="48"style="margin-left:20px">
        <p style="margin-left:5px">quản lý người dùng </p>    
      </div> 
      </a>
      <a href="login.php?ac=thoat">
      <div id="boxchucnang"style="margin-left:20px">
        <img src="img/thoat.jpg" width="48" height="48"style="margin-left:20px">
        <p style="margin-left:25px">thoát</p>
      </div>
      </a>	
</div>
<?php
	}
	?>