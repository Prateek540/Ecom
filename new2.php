<?php
require_once 'db.php';

$conn=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error) die($conn->connect_error);

$email=$_POST['email'];
$pass=$_POST['pass'];


if($email==""||$pass=="")
echo "All details are not entered";
else
{
    $query="SELECT * FROM log WHERE email='$email' AND pass='$pass'";
    $result=$conn->query($query);
    if($result->num_rows==0)
    echo "Invalid email or password";
    else
    echo "Logged in";

}
?>