<?php

    class Users extends Dbh{

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
            if(!empty($userDataArray))
        }
    }