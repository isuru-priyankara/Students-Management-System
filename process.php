<?php
include('connect.php');
if (isset($_POST["create"])) {
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $Address = mysqli_real_escape_string($conn, $_POST["Address"]);
    $Class = mysqli_real_escape_string($conn, $_POST["Class"]);
    $Mobile_Numbe = mysqli_real_escape_string($conn, $_POST["Mobile_Numbe"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);

    $sqlInsert = "INSERT INTO 12_students(Name , Address , Class , Mobile_Numbe, description) VALUES ('$Name','$Address','$Class','$Mobile_Numbe', '$description')";

    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Student Added Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $Address = mysqli_real_escape_string($conn, $_POST["Address"]);
    $Class = mysqli_real_escape_string($conn, $_POST["Class"]);
    $Mobile_Numbe = mysqli_real_escape_string($conn, $_POST["Mobile_Numbe"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    
    $sqlUpdate = "UPDATE 12_students SET Name = '$Name', Address = '$Address', Class = '$Class', Mobile_Numbe = '$Mobile_Numbe', description = '$description' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Student Updated Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>