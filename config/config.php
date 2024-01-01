<?php
    class Connection{
        protected $con;

        public function __construct(){
            $this->con = new mysqli("localhost","root","","Task Manager");
        }
    }

?>