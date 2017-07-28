<?php
session_start();
if(isset($_SESSION['logged']))
{
    global $user;
    $user = $_SESSION['logged'];
}

include "db.php";
function Send($username,$message)
{
    global $conn;
   $usern = $username;
    $msg = $message;
    
    $query = "Insert Into chat(username,message)";
    $query .= "Values('$usern','$msg')";
    $result = mysqli_query($conn,$query);
    if(!$result)
    {
        echo "Gre6ka";
    }else
    {
     echo "<h3 id = 'sender'>".$message."</h3>";
    echo "<h6 id = 'user'>Sent by ".$username."</h6>";   
    }
        
        
    
}
function Receive()
{
    global $user;
    global $conn;
    $query = "Select * from chat";
   $result = mysqli_query($conn,$query);
    if(!$result)
    {
        echo "Gre6ka";
    }else
    {
        while($row = mysqli_fetch_row($result))
        {
           if($row[1]==$user)
           {
             echo  "<h3 id = 'sender'>".$row[2]."</h3>";
           }else
           {
                echo  "<h3 id = 'receive'>".$row[2]."</h3>";
     echo"<h6 id = 'user'>Sent by ".$row[1]."</h6>";
           }
        
             
        }
    
    }
}
if(isset($_REQUEST['user']))
{
    $username = $_REQUEST['user'];
    $message = $_REQUEST['mess'];
    Send($username,$message);
}
if(isset($_REQUEST['receive']))
{
    Receive();
}
?>