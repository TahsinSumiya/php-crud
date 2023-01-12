<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `curd` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$mobile = $row['mobile'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


     $sql ="update `curd` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'
     where id=$id";

     $result=mysqli_query($con,$sql);

     if($result){
        header('location:display.php');
     }
     else{
        die(mysqli_error($con));
     }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" class="form-control" id="name" name="name" value=<?php echo $name ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">email</label>
    <input type="email" class="form-control" id="email" name="email" value=<?php echo $email ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" value=<?php echo $mobile ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password"value=<?php echo $password ?>>
  </div>
  <button type="submit" name='submit' class="btn btn-primary">Update</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
