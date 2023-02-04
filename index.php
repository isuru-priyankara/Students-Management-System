<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Students Management System</title>
    <style>
        table td,
        table th {
            vertical-align: middle;
            text-align: right;
            padding-top: 10px !important;
            
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="header">
        <h1>Students Management System</h1>
    </div>

    <div class="headerm">
    <ul>
    <li><a href="index.php" class="btn btn-primary" >Home</a></li>
    <li><a href="create.php" class="btn btn-primary">Students</a></li>
    <li><a href="Del.php" class="btn btn-primary">Delete</a></li>
    <div id="logbtn"><a href="logout.php" class="btn btn-primary">logout</a></div>
    </div>
    
    </ul>
                
    







    <?php
    session_start();
    if (isset($_SESSION["create"])) {
    ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["create"];
            ?>
        </div>
    <?php
        unset($_SESSION["create"]);
    }
    ?>
    <?php
    if (isset($_SESSION["update"])) {
    ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["update"];
            ?>
        </div>
    <?php
        unset($_SESSION["update"]);
    }
    ?>
    <?php
    if (isset($_SESSION["delete"])) {
    ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["delete"];
            ?>
        </div>
    <?php
        unset($_SESSION["delete"]);
    }
    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Mobile_Numbe</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>

            <?php
            include('connect.php');
            $sqlSelect = "SELECT * FROM 12_students";
            $result = mysqli_query($conn, $sqlSelect);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['Name']; ?></td>
                    <td><?php echo $data['Address']; ?></td>
                    <td><?php echo $data['Class']; ?></td>
                    <td><?php echo $data['Mobile_Numbe']; ?></td>
                    
                    
                    <td>
                        <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</body>

</html>