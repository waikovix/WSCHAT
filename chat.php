<?php
session_start();
function User()
{
    if(isset($_SESSION['logged']))
    {
        $username = $_SESSION['logged'];
        ?>
<h4>Username:</h4><h4 id = 'username'><?php echo $username?></h4>
<?php
    }else
    {
        $username = 'guest'.rand(0,1000);
        $_SESSION['logged'] = $username;
        ?>
<h4 id = 'username'><?php echo $username?></h4>
<?php
    }
        
}
?>
<!DOCTYPE HTML>
<html lang = 'bg'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <head><title>Chat Name</title> <link rel = 'stylesheet' type = 'text/css' href = 'style.css'><script src = 'core.js'></script></head>
    <body>
        <header>
            <h3 id = 'title'>Messenger</h3>
            <h4 id = 'creator'>Added by admin</h4>
            
        </header>
        <body>
            <div id = 'chat'>
            
            </div>
            <section id = 'chat_contrl'>
                <?php User();?>
                <h4>Message</h4>
                 <textarea id = 'message' cols="50" rows="5"></textarea>
                <br>
               <button class = 'send' id = 'send' onclick="Send('username','message')">Send</button>
            </section>
        </body>
    </body>
</html>