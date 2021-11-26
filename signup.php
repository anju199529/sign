<?php
$connection = mysqli_connect('localhost','root');
if($connection)
{
    echo "connection is establish!";
}
else

{
    echo"Error Connection Failed";
}


mysqli_select_db($connection, 'signuppage');

$Name=$_POST['name'];
$Contact=$_POST['contact'];
$Email=$_POST['email'];
$Password=$_POST['password'];

$data= "INSERT INTO signup(name,contact,email,password) 
VALUES('$Name','$Contact','$Email','$Password')";

mysqli_query($connection,$data);
header('location:success.php');


?>
