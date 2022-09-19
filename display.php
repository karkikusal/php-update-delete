<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <?php
                include 'conn.php';
                $query="SELECT * FROM todo_list";
                $result=mysqli_query($conn,$query);
                while($res=mysqli_fetch_array($result)){
                    ?>
                
                
                <tbody>
                    <tr>
                    
                    <td><?php echo $res['id']?></td>
                    <td><?php echo $res['name']?></td>
                    <td><?php echo $res['address']?></td>
                    <td><a href="Delete.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-outline-danger" value="Delete"></a></td>
                    <td><a href="Update.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-outline-dark" value="Update"></a></td>
                    
                   
                    </tr>
                   
                </tbody>
                <?php }?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>