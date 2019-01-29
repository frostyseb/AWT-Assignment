<?php
    class ClubMember extends Dbh{
        private $tableName = "club_member";

        private $uid;
        private $student_id;
        private $club_id;

        private $dataArray = array();

        public function checkClubMember($dataArray){
                $this->dataArray = $dataArray;
                $this->separateDataArray();
                $stmt = $this->connect()->prepare("SELECT * FROM club_member WHERE student_id=? AND club_id=?");
                $stmt->execute([$this->student_id,$this->club_id]);

                if(!$stmt->rowCount()){
                    $stmt = $this->connect()->prepare("INSERT INTO club_member SET student_id=?, club_id=?");
                    $stmt->execute([$this->student_id,$this->club_id]);
                }
                else{
                    echo "Repeated Data";
                }

                
        }

        public function fetchByClub($clubId){
            $stmt = $this->connect()->prepare("SELECT * FROM club_member WHERE club_id=?");
            $stmt->execute([$clubId]);
            if($stmt->rowCount()){
                while($row = $stmt->fetch()){
                    $student_id[] = $row['student_id'];
                }
                return $student_id;
    
            }
            else{
                echo "fetchByClub";
                return NULL;
            }
    }
        public function separateDataArray(){
            $this->student_id = $this->dataArray["student_id"];
            $this->club_id = $this->dataArray["club_id"];
        }
    }