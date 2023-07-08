<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="/icon.png">
  <title>Project Managemenet System</title>
<style>
body {
  font-family: Arial;
  color: white;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-image: url("https://cdn.pixabay.com/photo/2016/05/05/02/37/sunset-1373171_1280.jpg");
}

.split {
  height: 80%;
  width: 45%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  margin: 5%;
}

.left {
  background-color: white;
  color: black;
    border-radius: 25pt 25pt;
  margin-left: 25%;

}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

#email, #password {
 border:none;	
 outline:none;
 border-bottom:2px solid #e74c3c;	
 margin-bottom: 10px;
}

label{
    display: inline-block;
    text-align: left ;
}
/* Multi line Comment*/

#btn {
    border-radius: 24px;
    background: rgb(136, 137, 174);
    border: 2px black;
    border-style: solid;
    padding: 5px 20px;
    margin-top: 50px;
    background: transparent;
    cursor: pointer;
}

#btn:hover{
  transform: translateY(-5px);
  box-shadow: 0px 5px 5px 0px black;  
}

h1{
    display: inline-flex;
    margin-bottom: 70px;
    color: #e74c3c;
}
</style>
</head>
<body>
<div class="split left">
  <div class="centered">
    <form action="main.php" method="post">
        <h1 align="left">Sign In</h1>
        <label>Email</lable><br>
        <input type="email" name="Email" id="email" placeholder="Enter Your Email" required >
        <label>Password</lable><br>
    <input type="password" name="Password" id="password" placeholder="Enter Your Password" required><br>
    <input type="submit" value="Sign in" name="Click" id="btn">
    </form>
    <input type="button" onclick="window.location.href = 'Ragistration.php';" value="Create Profile" id="btn" style="margin: 10px;">
  </div>
        </div>   
</body>
          <?php
  include("upl/Footer.php");
  ?>
</html>

          



          









