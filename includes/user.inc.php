<?php

    class User extends Dbh{

        public function getAllUsers () {
        
            $stmt = $this->connect()->query("SELECT * FROM users");
    
            while($row = $stmt->fetch()) {
               // var_dump($row);
                $uid = $row['uid'];
                return $uid;
            }
        }

        public function getUsersWithCountCheck() {
            $id = 2;
            $uid ="uid2";
    
            $stmt = $this->connect()->prepare("SELECT * FROM USERS WHERE id=? AND uid=?");
            $stmt->execute([$id,$uid]);
    
            if($stmt->rowCount()){
                while($row = $stmt->fetch()){
                    return $row['uid'];
                }
    
            }
            else{
                echo "getUsersWithCountCheck";
            }
        }

        public function checkUser($userDataArray = array()){
            if(!empty($userDataArray)){
                //Check the data is in the database or not
                $prevQuery = "SELECT * FROM " .
                "WHERE oauth_provider = ' " . $userDataArray['oauth_provider']. "'
                AND oauth_uid = ' " . $userDataArray['oauth_uid'] . "'";
                
                $stmt = $this->connect()->query($sql);
                if($stmt->num_rows > 0){
                    echo "There is data";
                }
                else{
                    echo "No data in database";
                }

            }
        }
    }