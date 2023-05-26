<?php
$server="localhost";
$uname="root";
$pwd="";
$db="uk";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connect");

$name=$_POST['fname'];
$lname=$_POST['lname'];
$bod=$_POST['bod'];
$gen=$_POST['gen'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$phone=$_POST['phone'];
$addr=$_POST['addr'];
$fn=$_FILES['att']['name'];
$tempf=$_FILES['att']['tmp_name'];
$fdir="uploads/";
$att=$fdir.$fn;
if(move_uploaded_file($tempf,$att))
{
   $query="insert into reg values(null,'$name','$lname','$bod','$gen','$email','$pwd','$cpwd',$phone,'$addr','$att')";
   $res=mysqli_query($con,$query);
   echo"<script> alert('data saved');</script>";    
}
else
{
    echo"<script>alert('data unsaved')</script>";
}
?>