<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type"content="text/html;charset=utf-8"/>
<title>咖啡蚊</title>
<script type="text/javascript" src="jquery-1.8.3.min.js"></script> 
<script type="text/javascript"> 
$(function(){ 
$(".clsSort1").hover(function(){ 
$(".clsIndex1").show(); 
}, 
$(".clsSort2").hover(function(){ 
	$(".clsIndex2").show(); 
},
function(){ 
$(".clsIndex1").hide(); 
},
function(){
	$(".clsIndex2").hide();
}) 
}) 
</script> 
</head>
<link rel="stylesheet"type="text/css"href="index.css"/>
<body>
<div class="logo"></div>
<div class="login"></div>
<div class="index">
<img src="images/index.jpg"usemap="#index"/>
<map name="index">
<div class="clsSort1">
<area alt="篮球"shape="rect"href="basketball.php"coords="0,0,160,160">
</div>
<div class="clsSort2">
<area alt="足球"shape="rect"href="football.php"coords="160,0,320,160">
</div>
<area alt="跑步"shape="rect"href="running.php"coords="320,0,480,160">
<area alt="健身"shape="rect"href="PE.php"coords="480,0,640,160">
</map>
</div>
<div class="opt">
<div class="clsIndex1"><img src="images/red.jpg"></div>
<div class="clsIndex2"><img src="images/green.jpg"></div></div>
</body>
</html>
