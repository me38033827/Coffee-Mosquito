<?php
    require_once 'sqlTool.class.php';
    class BaskService{
        public function getRace(){
            $mysql= new SqlTool();
            $sql="select * from bask_race limit 0,9";
            $res=$mysql->dql($sql);
            return $res;
        }
        public function getEquip(){
            $mysql= new SqlTool();
            $sql="select * from bask_equip limit 0,9";
            $res=$mysql->dql($sql);
            return $res;
        }
        public function getLocal(){
            $mysql= new SqlTool();
            $sql="select * from bask_local limit 0,9";
            $res=$mysql->dql($sql);
            return $res;
        }
        public function getExp(){
            $mysql= new SqlTool();
            $sql="select * from bask_exp limit 0,9";
            $res=$mysql->dql($sql);
            return $res;
        }
        public function getPaging($paging,$opt){
            $sqlTool=new SqlTool();
            $sql1="select * from ".$opt." limit ".($paging->pageNow-1)*$paging->pageSize.",".$paging->pageSize;
            $sql2="select count(id) from ".$opt;
            $sqlTool->dql_paging($sql1,$sql2,$paging);
        }
        public function getInfo($opt,$id){
            $mysql= new SqlTool();
            $sql="select * from ".$opt." where id=".$id;
            $res=$mysql->dql($sql);
            return $res;
        }
        
    }

?>