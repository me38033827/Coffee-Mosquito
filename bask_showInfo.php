<?php
    require_once 'baskService.class.php';
    $opt=$_REQUEST['opt'];
    $id=$_REQUEST['id'];
    $baskService=new BaskService();
    $res=$baskService->getInfo($opt, $id);
?>
<html>
<head>
<meta http-equiv="content/type"content="text/html;charset=utf-8"/>
<title>详细信息</title>
<style type="text/css">
a:link{
color:black;
font-size:12px;
text-decoration:none;
}
a:hover{
text-decoration:underline;
font-size:14px;
color:green;
}
</style>
</head>
<body>
<h1>标题</h1>
<?php echo $res[0]['title'];?>
<h1>用户名</h1>
<?php echo $res[0]['username'];?>
<h1>发帖时间</h1>
<?php echo $res[0]['date'];?>
<h1>内容</h1>
<?php echo $res[0]['info'];?>
<br/><br/>
<a href='basketball.php'><font color='black'>返回篮球首页</font></a>
</body>
</html>