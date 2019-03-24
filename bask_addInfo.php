<html>
<head>
<meta http-equiv="content/type"content="text/html;charset=utf-8"/>
<title>发帖</title>
</head>
<body>
<form action="bask_addInfoProcess.php"method="post">
<font color="blue"><b>主题分类</b></font>
&nbsp&nbsp&nbsp<font color="orange">必填</font>
<select name="option" id="mySelect">
<option value="race">相关赛事</option>
<option value="equip">相关装备</option>
<option value="local">同城交友</option>
<option value="exp">经验交流</option>
</select>
<script language="JavaScript"> 
$("#mySelect").change(function(){
    if($("#mySelect").val()=="equip"){
        <html>
        <input type="text"name="title"><br/>
        </html>}
})
</script>
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