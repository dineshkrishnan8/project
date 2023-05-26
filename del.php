<?php
 $server="localhost";
 $uname="root";
 $pwd="";
 $db="uk";
 $con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
 $id1=$_GET['id'];
 $query="delete from reg where id=$id1";
 if($res=mysqli_query($con,$query))
 {
    echo"<script> alert('delete successfullu')</script>";
 }
 else
 {
    echo"<script> alert('delete not successfullu')</script>";
 }
 ?>