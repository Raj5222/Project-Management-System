<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration Form </title>
</head>
<style>
  body {
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
          background-image: url("http://www.pixelstalk.net/wp-content/uploads/2016/10/Nature-background-free-download.jpg");
       }
  form {
          margin: 70px 250px;
          padding: 15px;
          background-color: rgba(255,255,255, .4);
          border-radius: 25pt;
          overflow: hidden;
          display: grid;
          justify-content: center;
       }
  #btn {
    border-radius: 24px;
    border: 2px black;
    border-style: solid;
    padding: 5px 20px;
    margin-top: 50px;
    background: transparent;
    cursor: pointer;
    font-size: 20px;
    font-weight: bold;
}

#btn:hover{
  transform: translateY(-5px);
  box-shadow: 0px 5px 5px 0px black;  
}
#email,#password,#name,#mobile,#prn,#branch,#course,#Gender {
 border:none;	
 outline:none;
 border-bottom:2px solid #e74c3c;	
 margin-bottom: 10px;
 background: transparent;
 align-items: center;
 overflow: hidden;
    content: center;
}
  
</style>
<body>
    <div class="container">
        <form action="Project Details.php" method="post">
            <h1>Registration Form</h1>
            
          <i>
            Name :- <input type="text" name="Name" id="name" placeholder="Enter Name..." /><span class="fa fa-user"></span></i><br>    
          <i>
            E-Mail :- <input type="email" name="Email" id="email" placeholder="Enter Email..." /><span class="fa fa-envelope-o"></span></i><br>
          <i>
           Password :- <input type="password" name="Password" id="password" placeholder="Enter Passwod..."/><span class="fa fa-key"></span></i><br>
          <i>
            Mobile :- <input type="tel" name="Mobile" id="Mobile" placeholder="Enter Mobile Number...."/><span class="fa fa-mobile"></span></i><br>
          <i>
            PRN Number :- <input type="number" name="PRN" id="prn" min="2000000000000000" max="3000000000000000" placeholder="PRN Number...." /><span class="fa fa-user"></span></i><br>
          <i>Gender :- <select name="Gender" id="Gender">
              <option name="Gender" value="Male">Male</option>
              <option name="Gender" value="Female">Female</option>
              <option name="Gender" value="Other">Other</option>
            </select> </i> <br>
          <i>
            Branch :- <select name="Branch" id="branch">
              <option name="Branch" value="Engineering">Engineering</option>
              <option name="Branch" value="Diploma">Diploma</option>
              <option name="Branch" value="Dental">Dental</option>
            </select>
          </i>
            <input type="submit" name="Click" value="Submit" id="btn">      
        </form>
    </div>
</body>
  <?php
  include("upl/Footer.php");
  ?>
</html>
