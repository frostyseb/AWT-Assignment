<?php

class Cca extends Dbh{
    private $tableName = "cca";
    private $ccaDataArray = array();

    private $uid;
    private $student_id;
    private $club = array();
    private $third_club;
    private $second_club;
    private $total_cca;

    private $insertData;
    private $updateData;
    private $selectData;
    private $selectClub;

    function __construct(){
        $this->uid = $_SESSION['id'];
    }

    private function separateCcaData(){
        echo "<pre>";var_dump($this->ccaDataArray);echo"</pre>";
        $this->uid = $this->ccaDataArray['uid'];
        $this->student_id = $this->ccaDataArray['student_id'];
        $this->second_club = $this->ccaDataArray['second_club'];
        $this->third_club = $this->ccaDataArray['third_club'];
        $this->total_cca = $this->ccaDataArray['total_cca'];
    }

    public function checkCca ($ccaDataArray = array()){
        $this->ccaDataArray = $ccaDataArray;
        $this->separateCcaData();
        $stmt = $this->connect()->prepare("SELECT * FROM cca WHERE student_id=?");
        $stmt->execute([$this->student_id]);
            if(!$stmt->rowCount()){
                $stmt = $this->connect()->prepare("INSERT INTO cca SET uid=?, student_id=? , total_cca=?");
                $stmt->execute([$this->uid,$this->student_id,$this->total_cca]);
            }else{
                $stmt =$this->connect()->prepare("UPDATE cca SET total_cca=? WHERE uid=?");
                    $stmt->execute([$this->total_cca,$this->uid]);
            }
        
        

    }

    private function updateData(){

    }

    private function setSession(){
        $_SESSION['student_id'] = $this->student_id;
        $_SESSION['club_name'] = $this->club;
        $_SESSION['total_cca'] = $this->total_cca;
    }

    private function findClub(){
        $stmt = $this->connect()->prepare("select a.club_name FROM club a INNER JOIN club_member b on a.club_id = b. club_id WHERE b.student_id =?");
        $stmt->execute([$this->student_id]);
        if($stmt->rowCount()){
            while($row = $stmt->fetch()){
                $club[] = $row['club_name'] ;
            }
            $this->club = $club;
           
        }
    }


    public function fetchCca(){  
        $this->uid = $_SESSION['id'];
        $stmt = $this->connect()->prepare("SELECT * FROM cca WHERE uid = ?");
        $stmt->execute([$this->uid]);

        if($stmt->rowCount()){
            while($row = $stmt->fetch()){
                
                $this->uid = $row['uid'];
                
                $this->student_id = $row['student_id'];
                $this->total_cca = $row['total_cca'];
                //echo "<pre>"; var_dump($row);
                $this->findClub();
            }
           
        }
        $this->setSession();
    }
}