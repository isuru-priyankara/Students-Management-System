<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Book</title>
</head>
<body style="background-image: url(img/bg.jpg);">
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New student</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Name" placeholder="Name">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Address" placeholder="Address:">
            </div>
            <div class="form-elemnt my-4">
                <select name="Class" id="" class="form-control">
                    <option value="">Select Class:</option>
                    <option value="ART">ART</option>
                    <option value="TECT">TECT</option>
                    <option value="Commerse">Commerse</option>
                    <option value="Secince">Secince</option>
                </select>
            </div>

            <div class="form-element my-4">
                <textarea name="Mobile_Numbe" id="" class="form-control" placeholder="Mobile_Numbe:"></textarea>
            </div>

            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Student Description:"></textarea>
            </div>

            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Student" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>