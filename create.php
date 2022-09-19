<?php


include 'conn.php';
if(count($_POST)!=0)
{
    extract($_POST);
    $query="INSERT INTO todo_list (Name,Address) VALUES ('$Name','$Address')";
    echo $query;
    $result=mysqli_query($conn,$query);
    if($result==true)
    {
        echo "success";
    }
    else{
        echo "failed";
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
     <div  class="row">
        <div class="col-lg-6 m-auto">
            <form method="post">
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-center text-white">Todo application</h1>
                </div>
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="Name">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" name="Address">
                </div>
                <button type="Submit" class="btn btn-outline-info">submit</button>
            </div>
            </form>
            <h5><a href="display.php"><input type="button" class="btn btn-outline-success" value="user"></a></h5>
        </div>
    </div>
</div>
</body>
</html>