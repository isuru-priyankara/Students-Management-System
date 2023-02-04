<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM 12_students WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Student Deleted Successfully!";
    header("Location:index.php");
}

else{
    die("Something went wrong");
}
}else{
    echo "Student does not exist";
}
?>