<?php

    class Users extends Dbh{

        public function getAllUsers (){

            $stmt = $this.connect()->query("SELECT * FROM users");

            while($rows = $stmt->fetch()){
                //var_dump($row);
                $fName = $row['first_name'];
                return $fName;
            }
        }

        public function getUsersWithCountCheck(){
            $id = 2;

            $sql = "SELECT * FROM USERS WHERE id=? and uid=?";

            $stmt = $this->connect()->prepare($sql);

            $stmt->execute([$id,$uid]);
        }
    }