<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $gender = $dob = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Firstname,Lastname,Gender,dob,Email,Password) VALUES ('$fname','$lname','$gender','dob',$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>