<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego"


$conn = mysqli_connect($sever,$username,$password,$database);
if($conn)
{
    echo 'Database connection success';
}
else
{
    echo 'Error occured' . mysqli_error($conn);
}

?>