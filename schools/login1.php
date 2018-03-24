<?php
　　header("Content-type:text/html;charset=utf-8");
$link=mysql_connect("localhost","root","207207");
if($link)
{
  $select=mysql_select_db("login",$link);
  if($select)
  {
    if(isset($_POST["subl"]))
    {
      $name=$_POST["usernamel"];
      $password=$_POST["passwordl"];
      if($name==""||$password=="")//判断是否为空
      {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请填写正确的信息！"."\"".")".";"."</script>";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/login.html"."\""."</script>";
        exit;
      }
      $str="select password from register where username="."'"."$name"."'";
      mysql_query('SET NAMES UTF8');20       $result=mysql_query($str,$link);
      $pass=mysql_fetch_row($result);
      $pa=$pass[0];
      if($pa==$password)//判断密码与注册时密码是否一致
      {
        echo"登录成功！";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/success.html"."\""."</script>";
      }
      {  
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."登录失败！"."\"".")".";"."</script>";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/login.html"."\""."</script>";
      }
    }
     
  }
}
?>