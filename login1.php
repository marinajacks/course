<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<body>
<?php

	//$username = $_POST["userid"];
	//$password = $_POST["password"];
	 

	//下面的方法是直接连接数据库,使用的是mysqli的连接方法.

    $link=mysqli_connect('localhost','root','','school');

    $link->query("SET NAMES utf8");

    $sqls='SELECT id,name,dept,sex FROM students';

    $result = mysqli_query($link,$sqls);


	if ($result){
		echo('编号 姓名 学院 性别'). "<br/>";
	


	/* Fetch the results of the query 返回查询的结果 */
	while( $row = mysqli_fetch_assoc($result) ){
	    echo  
	    $row['id'], "<br>;",$row['name'], "<br>;",  $row['dept'], "<br>;", 
	    $row['sex'], "<br/>";
	   	}

	/* Destroy the result set and free the memory used for it 结束查询释放内存 */
	mysqli_free_result($result);
	}

	/* Close the connection 关闭连接*/
	mysqli_close($link);

	?>
	
</body>
</html>