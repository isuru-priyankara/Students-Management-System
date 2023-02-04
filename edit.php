<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Book</title>
</head>

<body style="background-image: url(img/bg.jpg);">
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Student Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php

            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM 12_students WHERE id=$id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
            ?>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="Name" placeholder="Name" value="<?php echo $row["Name"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <input type="text" class="form-control" name="Address" placeholder="Address:" value="<?php echo $row["Address"]; ?>">
                </div>
                <div class="form-elemnt my-4">
                    <select name="Class" id="" class="form-control">
                        <option value="">Select Book Type:</option>
                        <option value="ART" <?php if ($row["Class"] == "ART") {
                                                echo "selected";
                                            } ?>>ART</option>
                        <option value="TECT" <?php if ($row["Class"] == "TECT") {
                                                    echo "selected";
                                                } ?>>TECT</option>
                        <option value="Commerse" <?php if ($row["Class"] == "Commerse") {
                                                        echo "selected";
                                                    } ?>>Commerse</option>
                        <option value="Secince" <?php if ($row["Class"] == "Secince") {
                                                    echo "selected";
                                                } ?>>Secince</option>
                    </select>
                </div>

                <div class="form-element my-4">
                    <textarea name="Mobile_Numbe" id="" class="form-control" placeholder="Mobile"><?php echo $row["Mobile_Numbe"]; ?></textarea>
                </div>


                <div class="form-element my-4">
                    <textarea name="description" id="" class="form-control" placeholder="Student Description:"><?php echo $row["description"]; ?></textarea>
                </div>


                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="form-element my-4">
                    <input type="submit" name="edit" value="Submit details" class="btn btn-primary">
                </div>
            <?php
            } else {
                echo "<h3>Book Does Not Exist</h3>";
            }
            ?>

        </form>


    </div>
</body>

</html>