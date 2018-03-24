<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="../../dist/js/jquery-1.11.2.min.js"></script>
</head>

<body>

<h1>用户与角色管理</h1>
<div>
请选择用户：
    <select id="user">
        <?php
        include("../../fengzhuang/DBDA.class.php");
        $db = new DBDA();
        $sql = "select * from qx_user";
        $arr = $db->Query($sql);
        foreach($arr as $v)
        {
            echo "<option value='{$v[0]}'>{$v[2]}</option>";
        }
        ?>
    </select>
</div>
<br />
<div>
请选择角色：
<?php
$sjs = "select * from qx_juese";
$ajs = $db->Query($sjs);
foreach($ajs as $v)
{
    echo "<input type='checkbox' value='{$v[0]}' class='ck' />{$v[1]} ";
}
?>
</div>
<br />

<input type="button" value="确定" id="btn" />

</body>
<script type="text/javascript">
$(document).ready(function(e) {
    //选中默认角色
    Xuan();
    //当用户选中变化的时候，去选中相应角色
    $("#user").change(function(){
            Xuan();
        })
    //点击确定保存角色信息
    $("#btn").click(function(){
            var uid = $("#user").val();
            var juese = "";
            var ck = $(".ck");
            for(var i=0;i<ck.length;i++)
            {
                if(ck.eq(i).prop("checked"))
                {
                    juese += ck.eq(i).val()+"|";
                }
            }
            juese = juese.substr(0,juese.length-1);
            $.ajax({
                    url:"chuli.php",
                    data:{uid:uid,juese:juese,type:1},
                    type:"POST",
                    dataType:"TEXT",
                    success: function(data){
                            alert("保存成功！");
                        }
                });
        })
});
//选中默认角色
function Xuan()
{
    var uid = $("#user").val();
    $.ajax({
        url:"chuli.php",
        data:{uid:uid,type:0},
        type:"POST",
        dataType:"TEXT",
        success: function(data){
                var juese = data.trim().split("|");
                var ck = $(".ck");
                ck.prop("checked",false);
                for(var i=0;i<ck.length;i++)
                {
                    if(juese.indexOf(ck.eq(i).val())>=0)
                    {
                        ck.eq(i).prop("checked",true);
                    }
                }
                
            }
        });
}
</script>
</html>