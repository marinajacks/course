<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
<?php


	$servername = $_POST["ip"];
	$username = $_POST["name"];
	$password = $_POST["password"];
	 
	// 创建连接
	$conn = new mysqli($servername, $username, $password);
	 
	// 检测连接
	if ($conn->connect_error) {
	    die("连接失败: " . $conn->connect_error);
	} 
	echo "连接成功";
	?>
</body>
</html>