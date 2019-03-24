<html>

<head>
<meta http-equiv="content/type"content="text/html;charset=utf-8"/>
<title>篮球</title>
<link rel="stylesheet"content="text/css"href="basketball.css">

</head>
<body>
<div class="top"></div>
<div class="ad"></div>
<div class="race">
<fieldset>
<legend><font color="blue">相关赛事</font></legend>
<?php 
    require_once 'baskService.class.php';
    $baskService=new BaskService();
    $res=$baskService->getRace();
    if(!empty($res)){
        for($i=0;$i<count($res);$i++){
            echo"<a href='bask_showInfo.php?id=".$res[$i]['id']."&opt=bask_race'><font color='black'>";
            echo "<div style='float:right'>".substr($res[$i]
['date'],0,10)."</div>".$res[$i]['title'];
            echo"<br/>";
            echo "<font color='silver'>".$res[$i]['username']."</font>";
            echo"</a></font>";
            echo"<br/>";
        }
    }
	echo "<div style='float:right'><a href='bask_raceadd.php'><font color='black'>发帖</font></a></div>";
    if(count($res)==9){
        echo"<a href='bask_race.php'><font color='black'>更多</font></a>";
    }
    
?>
</fieldset>
</div>
<div class="equipment">
<fieldset>
<legend><font color="blue">篮球装备</font></legend>
<?php 
    $res=$baskService->getEquip();
    if(!empty($res)){
        for($i=0;$i<count($res);$i++){
            echo"<a href='bask_showInfo.php?id=".$res[$i]['id']."&opt=bask_equip'><font color='black'>";
            echo "<div style='float:right'>".substr($res[$i]['date'],0,10)."</div>".$res[$i]['title'];
            echo"<br/>";
            echo "<font color='silver'>".$res[$i]['username']."</font>";
            echo"</a></font>";
            echo"<br/>";
        }
    }
    echo "<div style='float:right'><a href='bask_equipadd.php'><font color='black'>发帖</font></a></div>";
    if(count($res)==9){
        echo"<a href='bask_equip.php'><font color='black'>更多</font></a>";
    }
?>
</fieldset>
</div>
<div class="local">
<fieldset>
<legend><font color="blue">同城交友</font></legend>
<?php 
    $res=$baskService->getLocal();
    if(!empty($res)){
        for($i=0;$i<count($res);$i++){
            echo"<a href='bask_showInfo.php?id=".$res[$i]['id']."&opt=bask_local'><font color='black'>";
            echo "<div style='float:right'>".substr($res[$i]['date'],0,10)."</div>".$res[$i]['title'];
            echo"<br/>";
            echo "<font color='silver'>".$res[$i]['username']."</font>";
            echo"</a></font>";
            echo"<br/>";
        }
    }
    echo "<div style='float:right'><a href='bask_localadd.php'><font color='black'>发帖</font></a></div>";
    if(count($res)==9){
        echo"<a href='bask_local.php'><font color='black'>更多</font></a>";
    }
?>
</fieldset>
</div>
<div class="experience">
<fieldset>
<legend><font color="blue">经验交流</font></legend>
<?php 
    $res=$baskService->getExp();
    if(!empty($res)){
        for($i=0;$i<count($res);$i++){
            echo"<a href='bask_showInfo.php?id=".$res[$i]['id']."&opt=bask_exp'><font color='black'>";
            echo "<div style='float:right; text-align:right'>".substr($res[$i]['date'],0,10)."</div>".$res[$i]['title'];
            echo"<br/>";
            echo "<font color='silver'>".$res[$i]['username']."</font>";
            echo"</a></font>";
            echo"<br/>";
        }
    }
    echo "<div style='float:right'><a href='bask_expadd.php'><font color='black'>发帖</font></a></div>";
    if(count($res)==9){
        echo"<a href='bask_exp.php'><font color='black'>更多</font></a>";
    }
?>
</fieldset>
</div>
</body>


</html>