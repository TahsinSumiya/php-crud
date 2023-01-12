<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="containeer m-5">
        
    <button type="button" class="btn btn-danger"><a class='text-light text-decoration-none'
     href='user.php'>Add user</a></button>

     <table class=" my-4 table table-dark table-hover">
  <thead>


    <tr>
      <th scope="col">Seial</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $sql = "Select * from `curd`";
  $result = mysqli_query($con,$sql);
  if($result){

         while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            $mobile = $row['mobile'];
            echo '
            <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>

                <td>
                <button class="btn btn-success"><a class="text-light text-decoration-none" href="update.php?updateid='.$id.'">update</a></button>
                <button class="btn btn-primary"><a class="text-light text-decoration-none" href="delete.php?deleteid='.$id.'">delete</a></button>
                </td>

            </tr>
            
            ';
         }
  }
  ?>


    
  </tbody>
</table>
    </div>
</body>
</html>