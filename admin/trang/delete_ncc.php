<?php 
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlbh";
    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);
	
		if(isset($_REQUEST['mathuonghieu']) and $_REQUEST['mathuonghieu']!="")
		{
			$mathuonghieu=$_GET['mathuonghieu'];
			$sql = "DELETE FROM `thuonghieu` WHERE mathuonghieu='$mathuonghieu '";
			if ($conn->query($sql) === TRUE)
			{
			echo '<script language="javascript">alert("✔ Xóa sản phẩm thành công!");
				location.replace("http://shop2hand.net/admin/quanly.php?quanly=thuonghieu");
			</script>';
			} 
			else 
			{
				echo '<script language="javascript">alert("❌ Xóa không thành công");
                location.replace("http://shop2hand.net/admin/quanly.php?quanly=thuonghieu");
				</script>';
			}
			$conn->close();
		}
?>