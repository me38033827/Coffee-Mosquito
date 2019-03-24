<html>
<head>
<meta http-equiv="content-type"content="text/html;charset=utf-8"/>
<title>篮球相关装备</title>
</head>
<body>
<?php 
    require_once 'baskService.class.php';
    require_once 'paging.class.php';
    $baskService=new BaskService();
    $paging=new Paging();
    $paging->pageNow=1;
    $paging->pageSize=10;
    $paging->gotoUrl='bask_equip.php';
    if(!empty($_GET['pageNow']))
    {
        $paging->pageNow=$_GET['pageNow'];
    }
    $opt="bask_equip";
    $baskService->getPaging($paging, $opt);
    echo"<h1>篮球装备</h1><br/><br/>";
    for($i=0;$i<count($paging->res);$i++){
        echo"<a href='bask_showInfo.php?id=".$paging->res[$i]['id']."&opt=bask_equip'><font color='black'>";
        echo "<div style='float:right; text-align:right'>".substr($paging->res[$i]['date'],0,10)."</div>".$paging->res[$i]['title'];
        echo"<br/>";
        echo "<font color='silver'>".$paging->res[$i]['username']."</font>";
        echo"</a></font>";
        echo"<br/>";  
    }
    echo"$paging->navigate";
    echo"当前页{$paging->pageNow}/共有{$paging->pageCount}页";
    echo"<br/><br/>";
?>
    <form action="bask_equip.php">
        跳转到:<input type="text"name="pageNow"/>
        <input type="submit" value="Go"/>
        </form>
</body>


</html>