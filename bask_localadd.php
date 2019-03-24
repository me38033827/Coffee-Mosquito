<html>
<head>
<meta http-equiv="content/type"content="text/html;charset=utf-8"/>
<title>发帖</title>
</head>
<body>
<form action="bask_addInfoProcess.php"method="post">
<font color="blue"><b>主题分类</b></font>
&nbsp&nbsp&nbsp<font color="orange">必填</font>
<select name="opt"onchange="window.location=this.value;">
<option value="bask_raceadd.php">相关赛事</option>
<option value="bask_equipadd.php">相关装备</option>
<option value="bask_localadd.php"selected="selected">同城交友</option>
<option value="bask_expadd.php">经验交流</option>
</select>
<input type="hidden" name="flag" value="local"/> 
<h1>标题</h1>
<input type="text"name="title"><br/>
<h1>内容</h1>
<textarea name="info"rows="10px" cols="40px"></textarea>
<br/>
<input type="submit" value="提交">&nbsp&nbsp
<input type="reset" value="重新填写">
</form>
</body>
</html>