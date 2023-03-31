<?php
    require_once("Helpers.php");

    class User{
        private $username;
        private $userEmail;
        private $userID;
        private $status;

        public function __construct($newUser, $email){
            $this->username = $newUser;
            $this->userEmail = $email;
            $this->status = 1;
            $this->userID = GetNextUserID();
        }

        public function __destruct(){
            $this->username = null;
            $this->userEmail = null;
            $this->status = null;
            $this->userID = null;
        }

        public function GetUserName(){
            return $this->username;
        }
        public function GetUserEmail(){
            return $this->userEmail;
        }
        public function GetUserID(){
            return $this->userID;
        }
        public function GetStatus(){
            return $this->status;
        }

        public function GetUserStatus($input){
            if($input > 1 || $input < 0)
                return false;
            $this->status = $input;
            return true;
        }

    }
?>