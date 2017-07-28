//General functions for chat app
//function to send messages

function Send( username, message)
{
    var username = document.getElementById(username).innerHTML;
    var message = document.getElementById(message).value;
    if(message != "")
        {
    var request = new XMLHttpRequest();
    try
        {
            request = new XMLHttpRequest();
            
        }
    catch(err)
        {
            try
                {
                    request = new ActiveXObject('Microsoft.XMLHTTP');
                }catch(err)
                    {
                        alert(err.name);
                    }
        }
    request.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
            {
            }
    }
    request.open("POST","functions.php",true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("user="+username+"&mess="+message);
   document.getElementById('message').value = "";
        }
    else
        {
            alert("Please enter a message");
        }
}
function Receive()
{
    var out = "";
     var message_box = document.getElementById('chat');
    var request = new XMLHttpRequest();
     var username = document.getElementById('username').innerHTML;
    try
        {
            request = new XMLHttpRequest();
            
        }
    catch(err)
        {
            try
                {
                    request = new ActiveXObject('Microsoft.XMLHTTP');
                }catch(err)
                    {
                        alert(err.name);
                    }
        }
    request.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
            {
                
                var data = request.responseText;
                message_box.innerHTML =data;
                message_box.scrollTop = message_box.scrollHeight;
            }
    }
    request.open("POST","functions.php",true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("&receive="+1); 
}


    setInterval(Receive,2500);



    
