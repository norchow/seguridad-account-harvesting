<html>
   
   <head>
      <title>Forgot Password Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <label>Email  :</label><input type = "text" name = "email" id="email" class = "box"/><br /><br />
               <input type = "submit" value = " Submit " onclick="forgotPassword()"/><br /><br />

               <a href="login.php">Go Back</a>
               
               <div id="txtError" style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
               <div id="txtOk" style = "font-size:11px; color:#00cc00; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>

   <script>
      function forgotPassword() {
         var xmlhttp = new XMLHttpRequest();
         
         xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("txtError").innerHTML = "";
               document.getElementById("txtOk").innerHTML = "We've sent an email to regenerate your password";
            }else if(xmlhttp.status == 400){
               document.getElementById("txtOk").innerHTML = "";
               document.getElementById("txtError").innerHTML = "There is no user with that email";
            }
         }

         var email = document.getElementById("email").value;
         var params = "email="+email;

         //Send the proper header information along with the request
         xmlhttp.open("POST", "php_ajax.php", true);
         xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xmlhttp.setRequestHeader("Content-length", params.length);
         xmlhttp.setRequestHeader("Connection", "close");
         xmlhttp.send(params);
      }
   </script>
</html>
