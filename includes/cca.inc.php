<?php

class Cca extends Dbh{
    private $tableName = " cca ";
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
        $selectData = "SELECT * FROM" . $this->tableName.
        "WHERE uid=?";
        echo "constructed with ".$this->uid;
        
    }

    private function separateCcaData(){

    }

    public function checkCca ($ccaDataArray = array()){
        $this->ccaDataArray = $ccaDataArray;

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
              // echo"<pre>". var_dump($row)."</pre>";
            }
           
        }
        $this->setSession();
        
    }


}