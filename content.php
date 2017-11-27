<div id="content">
	<?php
	if(isset($_GET['quanly'])){ 
	$tam= $_GET['quanly'];
	}
	else{
		$tam="";
	}
	if($tam == "thongtin")
	include (".../member.php");
	if ($tam=="loaitin")
	{
		include("modules/loaitin/main.php");
	}
	else{
		 if($tam=="baiviet")
		{
			include("modules/baiviet/main.php");
		}
		else{
			if($tam=="nguoidung")
		{
			include("modules/nguoidung/main.php");
		}
		}
	}
	?>
</div>