<?php

if(isset($_POST['id'])){

include("connect.php");

$stu_id = $_POST['id'];

$sql = "DELETE FROM 12_students WHERE id = {$stu_id}";

if(mysqli_query($conn, $sql)){
    session_start();
    $_SESSION["delete"] = "Student Deleted Successfully!";
    header("Location:index.php");
} 

else{
    die("Something went wrong");
}
}



?>
<body style="background-image: url(img/bg.jpg);">
<link rel="stylesheet" href="del.css">
<div class="center">
  <h1>Delete Student</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="inputbox">
      <input type="text" name="id" >
      <span>Student ID</span>
    </div>
    <div class="inputbox">
      <input type="submit" value="Delete" >
    </div>
  </form>
</div>