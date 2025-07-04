<?php
/*
Array
(
    [name] => chapter 19 .pdf
    [full_path] => chapter 19 .pdf
    [type] => application/pdf
    [tmp_name] => C:\xampp\tmp\php11D2.tmp
    [error] => 0
    [size] => 782663
)

*/
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // $img = $_FILES["uploaded_file"];
    // foreach ($img as $key => $value) {
    //   $$key = $value;
    // }
    // move_uploaded_file($tmp_name, "E:/uploads/$name");
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    
  }
  ?>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="uploaded_file[]" accept="image/*" multiple="multiple"/>
    <input type="submit" />
  </form>