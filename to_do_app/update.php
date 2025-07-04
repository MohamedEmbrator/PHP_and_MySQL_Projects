<?php
  session_start();
  if (isset($_GET["id"])) {
    $db = mysqli_connect("localhost", "root", "", "to_do_app");
    if(!$db){
      $_SESSION['errors']=  "Connection Error : " . mysqli_connect_error();
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM `tasks` WHERE `id` = '$id';";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!$row) {
        $_SESSION['errors'] = "Data Not Exists !";
        header("Location: .");
        exit;
    }
  }
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto">
          <form action="handlers/update_task.php?id=<?php echo $_GET['id']; ?>" method="POST" class="form border p-2 my-5">
            
                    <?php if(isset($_SESSION['errors'])): ?>
                        <div class="alert alert-danger text-center">
                            <?php 
                                echo $_SESSION['errors']; 
                                unset($_SESSION['errors']);
                            ?>
                            
                        </div>
                    <?php endif; ?>
                    <input type="text" name="title" value="<?php echo $row['title']; ?>"  class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Save"  class="form-control btn btn-primary my-3 " placeholder="add new todo">
          </form>
        </div>
      </div>
    </div>
        <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>