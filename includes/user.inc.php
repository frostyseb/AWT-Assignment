<?php

    class User extends Dbh{

        private $tableName =" users ";
        private $userDataArray = array();

        private $oProvider;
        private $oUid;
        private $fName;
        private $lName;
        private $email;
        private $gender;
        private $locale;
        private $picture;

        private $insertUser;
        private $oProvider_oUid;
        private $updateUser;
        
        public function insertNewUser (){
            
        }

        public function updateOldUser(){

        }

        //Automatically separate the data from array into variable
        private function separateFromArray(){
            $this->oProvider = $this->userDataArray['oProvider'];
            $this->oUid = $this->userDataArray['oUid'];
            $this->fName = $this->userDataArray['fName'];
            $this->lName = $this->userDataArray['lName'];
            $this->email = $this->userDataArray['email'];
            $this->gender;
            $this->locale = $this->userDataArray['locale'];
            $this->picture = $this->userDataArray['picture'];
             
            $this->oProvider_oUid = 
            "SELECT * FROM" .$this->tableName. 
            "WHERE 
                oauth_provider = '" . $this->oProvider . "'" .
                "AND 
                oauth_uid ='" .$this->oUid ."'";

            $this->insertUser =
            "INSERT INTO". $this->tableName .
            "SET ".
            "oauth_provider ='". $this->oProvider.   "', " .
            "oauth_uid = '"    . $this->oUid     .   "', " .
            "first_name = '"   . $this->fName    .   "', " .
            "last_name = '"    . $this->lName    .   "', " .
            "email = '"        . $this->email    .   "', " .
            "locale = '"       . $this->locale   .   "', " .
            "picture = '"      . $this->picture  .   "', " .
            "created = '"      . date("Y-m-d H:i:s") . "', ".
            "modified = '"     . date("Y-m-d H:i:s") . "' "
            ;

            $this->updateUser = 
            "UPDATE". $this->tableName .
            "SET ".
            "first_name = '"   . $this->fName    .   "', " .
            "last_name = '"    . $this->lName    .   "', " .
            "email = '"        . $this->email    .   "', " .
            "locale = '"       . $this->locale   .   "', " .
            "picture = '"      . $this->picture  .   "', " .
            "modified = '"     . date("Y-m-d H:i:s") . "' ".
            "WHERE ".
            "oauth_provider = '". $this->oProvider   .   "'" .
            " AND ".
            "oauth_uid ='"      .   $this->oUid      .   "'"
            ;

        }

        private function setSession(){
            $_SESSION['id'] = $this->oUid;
            $_SESSION['email'] = $this->email;
            switch($this->gender){
                case 'F':
                    $_SESSION['gender'] = 'Female';
                    break;
                case 'M':
                    $_SESSION['gender'] = 'Male';
                    break;
            }
            $_SESSION['picture'] = $this->picture;
            $_SESSION['familyName'] = $this->lName;
            $_SESSION['givenName'] = $this->fName;
        }

        //Set the user data array when checkUser() called
        private function setUserDataArray($array = array()){
            $this->userDataArray = $array;
            $this->separateFromArray();
        }

        public function updateGender($gender){
            $stmt = $this->connect()->prepare("UPDATE users SET gender=? WHERE oauth_uid=?");
            $stmt->execute([$gender,$this->oUid]);
        }

        public function fetchUser(){
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE oauth_uid=?");
            $stmt->execute([$this->oUid]);

            if($stmt->rowCount()){
                while($row = $stmt->fetch()){
                    $this->oProvider = $row['oauth_provider'];
                   $this->oUid = $row['oauth_uid'];
                   $this->fName = $row['first_name'];
                   $this->lName = $row['last_name'];
                   $this->email = $row['email'];
                   $this->gender = $row['gender'];
                   $this->locale = $row['locale'];
                   $this->picture = $row['picture'];
                  // echo"<pre>". var_dump($row)."</pre>";
                }
            }
            $this->setSession();
        }

        

        //Entry point
        public function checkUser($usdArray = array()){
            if(!empty($usdArray)){

                $this->setUserDataArray($usdArray);

                $stmt = $this->connect()->query($this->oProvider_oUid);
                if($stmt->rowCount()){
                    //_dump($this->userDataArray);
                    $update = $this->connect()->query($this->updateUser);
                    echo "There is data";
                }
                else{
                    $insert = $this->connect()->query($this->insertUser);
                    echo "No data in database";
                }

                $userData = $stmt->fetch();

            }
             $this->fetchUser();
            //return $userData;
        }
    }