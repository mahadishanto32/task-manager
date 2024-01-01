<?php

    include("config/config.php");

    class taskManager extends Connection{

        //Add task
        public function add_task($alltask){
            $taskName = $allTask['taskName'];
            $taskDate = $allTask['taskDate'];

            $sql = "INSERT INTO `tasks`(`task_name`, `task_date`) VALUES ('$taskName','$taskDate')";

            $result = $this->con->query($sql);
            if ($result){
                header ("Location: index.php");
            };
        }

        
        // All Tasks
        public function allTask(){
            return $result = $this->con->query("SELECT * FROM `tasks`");
        }

        // Edit Task
        public function edit_task($tid){
            return $result = $this->con->query("SELECT * FROM `tasks` WHERE id = '$tid'");
        }

        // Update Task
        public function update_task($alltask, $tid){
            $taskName = $allTask['taskName'];
            $taskDate = $allTask['taskDate'];

            $sql = "UPDATE `tasks`SET `task_name`='$taskName', `task_date`='$taskDate' WHERE id='$tid'";

            $result = $this->con->query($sql);
            if ($result){
                header ("Location: index.php");
            };
    }

    // Delete User 
    public function delete_task($tid){
        $result = $this->con->query ("DELETE FROM `users` WHERE id='$tid'");

        if ($result){
            header("Location: index.php");
        }
    }

    }

?>