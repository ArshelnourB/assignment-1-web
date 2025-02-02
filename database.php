<?php
    class database{
        private $connection;

        function __construct(){
            $this->connect_db();
        }

        public function connect_db(){
            $this->connection = mysqli_connect('localhost', 'root', 'mysql', 'week-4');
        }

        public function create($fname, $lname, $phone, $email, $dateOfBirth, $schoolYear, $course, $overallGrade){
            $sql = "INSERT INTO student (fname, lname, phone, email, dateOfBirth, schoolYear, course, overallGrade)
                    VALUES ('$fname', '$lname', '$phone', '$email', '$dateOfBirth', '$schoolYear', '$course', '$overallGrade')";
            $res = mysqli_query($this->connection, $sql);
            if($res){
                return true;
            }
            else{
                return false;
            }
        }

        public function sanitize($var){
            $return = mysqli_real_escape_string($this->connection, $var);
            return $return;
        }
    }
$database = new database();
?>