<?php
    class Club extends Dbh{
        private $tablename = "club";
        private $cname;
        private $cid;
        private $clubDataArray = array();

        private function separateData(){
            $this->cname = $this->clubDataArray['cname'];
            $this->cid = $this->clubDataArray['cid'];
        }

        
        public function checkClub($clubDataArray = array()){
                $this->clubDataArray = $clubDataArray;
                $this->separateData();

                $stmt = $this->connect()->prepare("INSERT INTO club SET club_name=?, club_id=?");
                $stmt->execute([$this->cname,$this->cid]);
        }

        
    }
?>