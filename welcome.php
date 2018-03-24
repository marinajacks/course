<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>

欢迎 <?php echo $_POST["ip"]; ?><br>
你的名字是: <?php echo $_POST["name"]; ?><br>
你的密码是: <?php echo $_POST["password"]; ?><br>
你的数据库是: <?php echo $_POST["database"]; ?><br>


	$servername = $_POST["ip"]
	$username = $_POST["name"];
	$password = $_POST["database"];
	 
	// 创建连接
	$conn = new mysqli($servername, $username, $password);
	 
	// 检测连接
	if ($conn->connect_error) {
	    die("连接失败: " . $conn->connect_error);
	} 
	echo "连接成功";
</body>
</html>