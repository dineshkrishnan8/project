<?php
 $server="localhost";
 $uname="root";
 $pwd="";
 $db="uk";
 $con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
 $id=$_POST['id'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $bod=$_POST['bod'];
 $email=$_POST['email'];
 $pwd=$_POST['pwd'];
 $phone=$_POST['phone'];
 $addr=$_POST['addr'];
 $query="update reg set name='$fname',lname='$lname',bod='$bod',email='$email',pwd='$pwd',phone='$phone',addr='$addr' where id=$id";
 if($res=mysqli_query($con,$query))
 {
    echo"<script> alert('update successfullu')</script>";
 }
 else
 {
    echo"<script> alert('update not successfullu')</script>";
 }
 ?>