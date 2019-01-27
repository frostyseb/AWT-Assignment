<?php

class Cca extends Dbh{
    private $tableName = "cca";
    private $ccaDataArray = array();

    private $uid;
    private $first_club;
    private $second_club;
    private $third_club;
    private $total_cca;

    private $insertData;
    private $updateData;
    private $selectData;

    function __construct(){
        $this->uid = $_SESSION['id'];
        $this->selectData = "SELECT * FROM " . $this->tableName.
        " WHERE uid=?";
        //echo "constructed with ".$this->uid;

        $this->updateData = "UPDATE " . $this->tableName .
        "SET first_club=? , second_club=? , third_club=? , total_cca=? WHERE uid=?";
    }

    private function separateCcaData(){
        echo "<pre>";var_dump($this->ccaDataArray);echo"</pre>";
        $this->uid = $this->ccaDataArray['uid'];
        $this->first_club = $this->ccaDataArray['first_club'];
        $this->second_club = $this->ccaDataArray['second_club'];
        $this->third_club = $this->ccaDataArray['third_club'];
        $this->total_cca = $this->ccaDataArray['total_cca'];
    }

    public function checkCca ($ccaDataArray = array()){
        $this->ccaDataArray = $ccaDataArray;
        $this->separateCcaData();
        $stmt = $this->connect()->prepare("UPDATE cca SET first_club=? , second_club=? , third_club=? , total_cca=? WHERE uid=?");
        $stmt->execute([$this->first_club,$this->second_club,$this->third_club,$this->total_cca,$this->uid]);

    }

    private function updateData(){

    }

    private function setSession(){
        $_SESSION['first_club'] = $this->first_club;
        $_SESSION['second_club'] = $this->second_club;
        $_SESSION['third_club'] = $this->third_club;
        $_SESSION['total_cca'] = $this->total_cca;
    }


    public function fetchCca(){   
        $stmt = $this->connect()->prepare("SELECT * FROM cca WHERE uid = ?");
        $stmt->execute([$this->uid]);

        if($stmt->rowCount()){
            while($row = $stmt->fetch()){
                $this->uid = $row['uid'];
                $this->first_club = $row['first_club'];
                $this->second_club = $row['second_club'];
                $this->third_club = $row['third_club'];
                $this->total_cca = $row['total_cca'];
                //echo "<pre>"; var_dump($row);
            }
           
        }
        $this->setSession();
    }
}