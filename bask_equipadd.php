<html>
<head>
<meta http-equiv="content/type"content="text/html;charset=utf-8"/>
<title>发帖</title>
</head>
<body>
<form action="bask_addInfoProcess.php"method="post">
<font color="blue"><b>主题分类</b></font>
&nbsp&nbsp&nbsp<font color="orange">必填</font>
<select onchange="window.location=this.value;">
<option value="bask_raceadd.php">相关赛事</option>
<option value="bask_equipadd.php"selected="selected">相关装备</option>
<option value="bask_localadd.php">同城交友</option>
<option value="bask_expadd.php">经验交流</option>
</select>
<h1>标题</h1>
<input type="text"name="title"><br/>
<h1>内容</h1>
<textarea name="info"rows="10px" cols="40px"></textarea>
<br/>
<input type="hidden" name="flag" value="equip"/> 
<h1>分类</h1>
<select name="sort" >
<option value="ball">篮球</option>
<option value="cloth">球衣</option>
<option value="shoes">篮球鞋</option>
<option value="other">其他</option>
</select>
<h1>链接</h1>
<textarea name="link"rows="4px" cols="30px"></textarea>
<input type="submit" value="提交">&nbsp&nbsp
<input type="reset" value="重新填写">
</form>
</body>
</html>