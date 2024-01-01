<?php
    include("classes/taskManager.php");
    $t1 = new taskManager();
    $id = $_GET['id'];

    if(isset($_GET['id'])){
        $t1->delete_task($id);
    }

?>