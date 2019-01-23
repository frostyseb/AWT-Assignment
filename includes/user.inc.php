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
        
        public function storeNewUser (){
            
        }

        public function updateUser(){

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
                //Check the data is in the database or not
               /* $prevQuery = "SELECT * FROM" . $this->tableName.
                "WHERE oauth_provider = '" . $userDataArray['oauth_provider']. "'".
                "AND oauth_uid = '" . $userDataArray['oauth_uid'] . "'";*/

                $oProvider_oUid = "SELECT * FROM" .$this->tableName. "WHERE 
                oauth_provider = '" . $this->oProvider . "'" .
                "AND oauth_uid ='" .$this->oUid ."'";
                
                $stmt = $this->connect()->query($oProvider_oUid);
                if($stmt->rowCount()){
                    echo "There is data";
                }
                else{
                    echo "No data in database";
                }

            }
        }
    }