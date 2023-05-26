<?php
$fname=$_POST['fname'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","uk") or die("db not connected");
$query="select * from regp where fname='$fname'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    if($row['pwd']==$pwd)
    {
        echo "<script> alert ('login success');
             window.location.href='fet.php';
            </script>";
    }
    else
    {
        echo "<script> alert('login un success') </script>";
    }
}
else
{
    echo "<script> alert('invalid user name');</script>";
}
?>