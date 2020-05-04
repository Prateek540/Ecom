<?php
require_once 'db.php';

$username=$_POST['username'];
$contact=$_POST['contact'];
$message=$_POST['message'];

$conn=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) die($conn->connect_error);

$query="INSERT INTO feed(id,username,contact,message) VALUES(NULL,'$username','$contact','$message')";

$result=$conn->query($query);

if(!$result) die("Database access failed ".$conn->error);
else 
include "index.php";

?>


