<html>
<head>
<meta http-equiv="content-type"content="text/html;charset=utf-8"/>
</head>
<?php
    require_once 'paging.class.php';
    class SqlTool{
        public function dql($sql){
            $mysql=new SaeMysql();
            $res=$mysql->getData($sql);
            if($mysql->errno()!=0){
                die("错误：".$mysql->errmsg());
            }
            $mysql->closeDb();
            return $res;
        }
        public function dml($sql){
            $mysql=new SaeMysql();
            $mysql->setCharset("utf8");
            $mysql->runSql($sql);
            if($mysql->errno()!=0){
                die("错误：".$mysql->errmsg());
            }
            $mysql->closeDb();
        }
        public function dql_paging($sql1,$sql2,$paging){
            $mysql=new SaeMysql();
            $res1=$mysql->getData($sql2);
            $paging->pageCount=ceil($res1[0]["count(id)"]/$paging->pageSize);
            $paging->rowCount=$res1[0]["count(id)"];
            $paging->rowCount=(int)$paging->rowCount;
            $paging->res=$mysql->getData($sql1);
            $mysql->closeDb();
            if($paging->pageNow>1){
                $prePage=$paging->pageNow-1;
                $paging->navigate="<a href='{$paging->gotoUrl}?pageNow=$prePage'>上一页</a>&nbsp";
            }
            if($paging->pageNow<$paging->pageCount){
                $nextPage=$paging->pageNow+1;
                $paging->navigate.="<a href='{$paging->gotoUrl}?pageNow=$nextPage'>下一页</a>&nbsp";
                
            }
            $page_whole=10;
            $start=floor(($paging->pageNow-1)/$page_whole)*$page_whole+1;
            $index=$start;
            if($paging->pageCount<$page_whole)
            {
                for(;$start<$index+$paging->pageCount;$start++){
                    $paging->navigate.="<a href='{$paging->gotoUrl}?pageNow=$start'>[$start]</a>";
                } 
            }
            elseif($paging->pageNow>$page_whole){
                $index1=$start-($page_whole+1);
                $paging->navigate.="&nbsp;&nbsp;<a href='{$paging->gotoUrl}?pageNow=$index1'>&nbsp;&nbsp;<<</a>&nbsp;&nbsp";
              
                for(;$start<$index+$page_whole;$start++){
                    if($start>$paging->rowCount)
                        break;
                    $paging->navigate.="<a href='{$paging->gotoUrl}?pageNow=$start'>[$start]</a>";
                }
                if($start<$paging->rowCount)
                    $paging->navigate.="<a href='{$paging->gotoUrl}?pageNow=$start'>>></a>&nbsp;&nbsp";
            }
            }   
    }
?>
</html>