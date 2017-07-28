<?php
$conn = mysqli_connect('localhost','root','','chat');
if(!$conn)
{
    die("An error occured while trying to connect to the database.Try again later.Here is the error " . mysqli_error($conn));
}
?>