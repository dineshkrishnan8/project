<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<style>
body{  
background-image:linear-gradient(to right,rgb(229, 243, 38),rgba(18, 238, 73, 0.973),rgb(248, 53, 216)) ;
margin-left:40%;
font-family: 'Dancing Script', cursive!important;
}

</style>
<body>
<div class="container">
        <div class="row">
            <?php
             $server="localhost";
             $uname="root";
             $pwd="";
             $db="uk";
             $con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
             $id1=$_GET['id'];
             $que="select * from reg where id=$id1";
             $res=mysqli_query($con,$que);
             if($row=mysqli_fetch_array($res))
             {
                ?>
                <form method="post" action="ud2.php" class="text-center" >
                    <lable class="form-lable">id</lable>
                    <input type="text" class="form-control" name="id" value="<?php echo $row[0];?>"read only>
                    <lable class="form-lable">Firstname</lable>
                    <input type="text" class="form-control" name="fname" value="<?php echo $row[1];?>">
                    <lable class="form-lable">Lastname</lable>
                    <input type="text" class="form-control" name="lname" value="<?php echo $row[2];?>">
                    <lable class="form-lable">BOD</lable>
                    <input type="date" class="form-control" name="bod" value="<?php echo $row[3];?>">
                    <lable class="form-lable">Gender</lable>
                    <input type="text" class="form-control" name="gen" value="<?php echo $row[4];?>">
                    <lable class="form-lable">Email</lable>
                    <input type="text" class="form-control" name="email" value="<?php echo $row[5];?>">
                    <lable class="form-lable">Password</lable>
                    <input type="text" class="form-control" name="pwd" value="<?php echo $row[6];?>">
                    <lable class="form-lable">cpassword</lable>
                    <input type="text" class="form-control" name="cpwd" value="<?php echo $row[7];?>">
                    <lable class="form-lable">Phone</lable>
                    <input type="tel" class="form-control" name="phone" value="<?php echo $row[8];?>">
                    <lable class="form-lable">Address</lable>
                    <input type="text" class="form-control" name="addr" value="<?php echo $row[9];?>">
                    <lable class="form-lable">File</lable>
                    <input type="text" class="form-control" name="att" value="<?php echo $row[10];?>">
                    <input type="submit" name="update"class="btn btn-primary" value="update">
                    <?php

             }
             ?>
             </form>
            </div>
            </div>
</body>
</html>