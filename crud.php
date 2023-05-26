<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
body{  
background-image:linear-gradient(to right,rgb(229, 243, 38),rgba(18, 238, 73, 0.973),rgb(248, 53, 216)) ;
font-family: 'Dancing Script', cursive!important;
}
</style>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
            <thead>
                <th>id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>BOD</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Cpassword</th>
                <th>Phone</th>
                <th>Address</th>
                <th>file name</th>
                <th>file download </th>
                <th>update file</th>
                <th>delete file</th>
</thead>
<tbody>
    <?php
    $server="localhost";
    $uname="root";
    $pwd="";
    $db="uk";
    $con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
    $query="select * from reg";
    $res=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($res))
    {
        $id=$row[0];
        $fname=$row[10];
        echo"<tr>";
        echo"<td>".$row[0]."</td>";
        echo"<td>".$row[1]."</td>";
        echo"<td>".$row[2]."</td>";
        echo"<td>".$row[3]."</td>";
        echo"<td>".$row[4]."</td>";
        echo"<td>".$row[5]."</td>";
        echo"<td>".$row[6]."</td>";
        echo"<td>".$row[7]."</td>";
        echo"<td>".$row[8]."</td>";
        echo"<td>".$row[9]."</td>";
        echo"<td>".$row[10]."</td>";
        echo"<td><a download='$fname' href='".$fname."' class='btn btn-success'>download</a></td>";
        echo"<td><a href='ud1.php?id=$id'class='btn btn-success'>update</a></td>";
        echo"<td><a href='del.php?id=$id'class='btn btn-success'>delete</a></td>";
        echo"</tr>";
    }
    ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>