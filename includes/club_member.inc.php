<?php
    class ClubMember extends Dbh{
        private $tableName = "club_member";

        private $uid;
        private $student_id;
        private $club_id;

        private $dataArray = array();

        public function checkClubMember($dataArray){
            if(!empty($dataArray)){
                $this->dataArray = $dataArray;
                $this->separateDataArray();

                $stmt->connect()->prepare("INSERT INTO club_member SET student_id=?, club_id=?");
                $stmt->execute([$this->student_id,$this->club_id]);
            }
        }

        public function fetchAllData(){
            $stmt = $this->connect()->prepare("SELECT * FROM club_member WHERE student_id=?");
            $stmt->execute([$this->student_id]);
        }

        public function separateDataArray(){
            $this->student_id = $this->dataArray["student_id"];
            $this->club_id = $this->dataArray["club_id"];
        }
    }