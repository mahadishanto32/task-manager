<?php

    include("classes/taskManager.php");
    $t1 = new taskManager();

    $id = $_GET['id'];
    if(isset)($_GET['id']){
        $data = $t1->edit_task($id);
        $row = mysqli_fetch_assoc($data);
    }

    if(isset)($_POST['id']){
        $t1->update_task($_POST, $id);
    }

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    
                    
                    <div class="container">
                        <div class="addTask">
                        <form action="" method="POST">
                        <h2 class="display-5 text-primary">Update Tasks</h2>
                        <div class="form-group mb-3">
                            <label for="addtask">Add Task</label>
                        <input type="text" name="taskName" id="addtask" placeholder="Enter Task Details" value="<?php echo $row['task_name'];?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="taskdate">Task Date</label>
                        <input type="date" name="taskDate" id="taskdate" placeholder="Enter Task Details" <?php echo $row['task_date'];?> class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" name="update_task" class="btn btn-dark" value="Update Task">
                        </div>
                        </form>
                    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>