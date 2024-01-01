<?php

    include("classes/taskManager.php");
    $t1 = new taskManager();

    if(isset($_POST['add_task'])){
        $t1->add_task($_POST);
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

    <div class="taskManager py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 shadow p-5">
                    <div class="title">
                        <h2 class="display-4 text-primary">Task Manager</h2>
                        <p class="lead">This is a simple Project using HTML, CSS, Bootstrap, PHP & MYSQL</p>
                    </div>
                    <div class="alltask py-4">
                    <h2 class="display-5 text-primary">All Tasks</h2>
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Task Details</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>

                            <?php
                            $data = $t1->allTask();
                            $i = 1;
                            while($row = mysqli_fetch_assoc($data)){?>

                                
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $row["task_name"];?></td>
                                <td><?php echo date("d-m-Y", strtotime($row['task_date']));?></td>
                                <td>
                                <a href="edit.php?=id<?php echo $row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?=id<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                
                            
                            </tr>
                            <?php
                            }
                            ?>



                            <tr>
                                <td>1</td>
                                <td>Demo</td>
                                <td>21-05-2023</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="addTask">
                        <form action="" method="POST">
                        <h2 class="display-5 text-primary">Add Tasks</h2>
                        <div class="form-group mb-3">
                            <label for="addtask">Add Task</label>
                        <input type="text" name="taskName" id="addtask" placeholder="Enter Task Details" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="taskdate">Task Date</label>
                        <input type="date" name="taskDate" id="taskdate" placeholder="Enter Task Details" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" name="add_task" class="btn btn-dark" value="Add Task">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>