<?php
$servername="localhost";
$username="root";
$pwd="";
$database="uk";
 
try 
{
    $con=new PDO("mysql:host=$servername;dbname=$database",$username,$pwd);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   if(isset($_POST['submit']))
 {
    $name=$_POST['fname'];
    $lname=$_POST['lname'];
    $bod=$_POST['bod'];
    $gen=$_POST['gen'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
    $phone=$_POST['phone'];
    $addr=$_POST['addr'];
  $query=" insert into regp (fname,lname,bod,gen,email,pwd,cpwd,phone,addr) values (:fname,:lname,:bod,:gen,:email,:pwd,:cpwd,:phone,:addr) ";
  $query_run=$con->prepare($query);

  $data=[
    ':fname' => $name,
    ':lname' => $lname,
    ':bod' => $bod,
    ':gen' => $gen,
    ':email'=>$email,
     ':pwd'=>$pwd,
     ':cpwd'=>$cpwd,
     ':phone'=>$phone,
     ':addr'=>$addr
  ];
  $query_execute= $query_run->execute($data);
  if ($query_execute)
  {
    $_SESSION['message']="insert success";
    header('location:reg1.php');
    exit(0);
  }
  else{
    $_SESSION['message']=" not insert success";
    header('location:reg1.php');
    exit(0);
  }
  }
}
catch (PDOException $e) {
    echo "connection falied" .$e ->getMessage();
}
?>