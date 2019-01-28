<?php
    class Club extends Dbh{
        private $tablename = "club";
        private $cname;
        private $cid;

        private $dataArray = array();

        public function checkClub($dataArray){
            if(!empty($dataArray)){
                $this->dataArray = $dataArray;
                $this->separatedataArray();

                $stmt->connect->prepare("INSERT INTO club SET cname=?, cid=?");
                $stmt->execute([$this->cname,$this->cid]);
            }
        }

        public function separatedataArray(){
            $this->cname = $this->dataArray("cname");
            $this->cid = $this->dataArray("cid");
        }
    }
?>