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
        public function separateFromArray(){
            $this->oProvider = $this->userDataArray['oProvider'];
            $this->oUid = $this->userDataArray['oUid'];
            $this->fName = $this->userDataArray['fName'];
            $this->lName = $this->userDataArray['lName'];
            $this->email = $this->userDataArray['email'];
            $this->gender = $this->userDataArray['gender'];
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
            "gender = '"       . $this->gender   .   "', " .
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
            "gender = '"       . $this->gender   .   "', " .
            "locale = '"       . $this->locale   .   "', " .
            "picture = '"      . $this->picture  .   "', " .
            "modified = '"     . date("Y-m-d H:i:s") . "' ".
            "WHERE ".
            "oauth_provider = '". $this->oProvider   .   "'" .
            " AND ".
            "oauth_uid ='"      .   $this->oUid      .   "'"
            ;



        }

        //Set the user data array when checkUser() called
        public function setUserDataArray($array = array()){
            $this->userDataArray = $array;
            $this->separateFromArray();
        }

        

        //Entry point
        public function checkUser($usdArray = array()){
            if(!empty($usdArray)){

                $this->setUserDataArray($usdArray);

                $stmt = $this->connect()->query($this->oProvider_oUid);
                if($stmt->rowCount()){
                    var_dump($this->userDataArray);
                    $update = $this->connect()->query($this->updateUser);
                    echo "There is data";
                }
                else{
                    $insert = $this->connect()->query($this->insertUser);
                    echo "No data in database";
                }

                $userData = $stmt->fetch();

            }
            return $userData;
        }
    }