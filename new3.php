<?php
require_once 'db.php';


$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$conn=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) die($conn->connect_error);


$query="INSERT INTO log(name,email,pass) VALUES('$name','$email','$pass')";

$result=$conn->query($query);

if(!$result) die("Database access failed".$conn->error);

?>