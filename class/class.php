<?php
    class user {
        public $idnumber;
        public $name;
        public $lastname;
        public $age;
        public $email;

        public function __construct($idnumber, $name, $lastname, $age, $email) {
            $this->idnumber = $idnumber;
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->email = $email;
        }

        public function displayUserInfo() {
            echo "ID: " . $this->idnumber . "<br>";
            echo "Name: " . $this->name . " " . $this->lastname . "<br>";
            echo "Age: " . $this->age . "<br>";
            echo "Email: " . $this->email . "<br>";
        }
    }
?>

