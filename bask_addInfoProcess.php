<html>
<head>
<meta http-equiv="content-type"content="text/html;charset=utf-8"/>
</head>
<?php
    require_once 'sqlTool.class.php';
    $opt=$_REQUEST['flag'];
    $title=$_POST['title'];
    $info=$_POST['info'];
    $sort=$_POST['sort'];
    $link=$_POST['link'];
    $mysql=new SqlTool();
    if($opt=="race"){
        $sql="insert into bask_race values(null,'zh',null,'$title','$info')";
        $mysql->dml($sql); 

    }elseif ($opt=="equip"){
        $sql="insert into bask_equip values(null,'zh',null,'$sort','$link','$title','$info')";
        $mysql->dml($sql);
      
    }elseif ($opt=="local"){
        $sql="insert into bask_local values(null,'zh',null,'$title','$info')";
        $mysql->dml($sql);
        
    }elseif ($opt=="exp"){
        $sql="insert into bask_exp values(null,'zh',null,'$title','$info')";
        $mysql->dml($sql);
       
    }
    /* header('Location:ok.php?index=1');
    exit(); */
    echo"发帖成功<br/>";
    echo"<a href='basketball.php'>返回篮球首页</a>";
    echo"<a href='index.php'>返回首页</a>";
?>
</html>