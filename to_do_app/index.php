<?php 
  session_start();
  $db = mysqli_connect("localhost", "root", "", "to_do_app");
  if (!$db) {
    echo "Connection Error : " . mysqli_connect_error();
  }
  $sql = "SELECT * FROM `tasks` ORDER BY `id` DESC";
  $result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>

<body>

  

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handlers/strore_task.php" method="POST" class="form border p-2 my-5">
                  <?php if(isset($_SESSION["success"])) : ?>
                    <div class="alert alert-success text-center"><?php 
                    echo $_SESSION["success"];
                    unset($_SESSION["success"]);
                      ?></div>
                    <?php endif; ?>
                  <?php if(isset($_SESSION["errors"])) : ?>
                    <div class="alert alert-danger text-center"><?php 
                    echo $_SESSION["errors"];
                    unset($_SESSION["errors"]);
                      ?></div>
                    <?php endif; ?>
                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                      
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["title"]; ?></td>
                                <td>
                                    <a href="handlers/delete_task.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                                    <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-info text-light"><i class="fa-solid fa-edit"></i> </a>
                                </td>
                            </tr>
                      <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>