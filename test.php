<?php
	$mysql=new SaeMysql();
	$sql="select * from bask_race limit 0,10";
	$res=$mysql->getData($sql);
	if($mysql->errno()!=0){
				die("Error:".$mysql->errmsg());
			}
	$mysql->closeDb();
	echo $res[1]['date'];
	echo substr($res[1]['date'],0,10);
	
?>