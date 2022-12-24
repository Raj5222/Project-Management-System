<?php
include("config.php");
error_reporting(0);
if (isset($_POST['Click']))
      $UPRN=$_POST['PRN'];
      $sqluser="SELECT * FROM profiles WHERE PRN='$UPRN' ";
      $qresult=mysqli_query($con, $sqluser);
      $count=mysqli_num_rows($qresult);
      if($count)
      {
           echo "<script>alert('Same Student Not Allowed.(PRN).');</script>";
           echo "<meta http-equiv='Refresh' content='0.5;url=Ragistration.php'>";
           
      }
      else
      {

if(isset($_POST['Click'])){
    if(isset($_POST['Click']))
    {
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Mobile=$_POST['Mobile'];
        $PRN=$_POST['PRN'];
        $Gender=$_POST['Gender'];
        $Branch=$_POST['Branch'];
        $sql="insert into profiles(Name, Email, Password, Mobile,PRN, Gender, Branch)
        value('$Name', '$Email', '$Password', '$Mobile', '$PRN', '$Gender', '$Branch')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('Profile Created.');</script>";
        }
    }
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


    <title>Fill Project Details </title>
</head>
<style>
  *{
    font-family: 'Roboto', sans-serif;
   }
  body {
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
          background-image: url("http://www.pixelstalk.net/wp-content/uploads/2016/10/Nature-background-free-download.jpg");
          z-index: 0;
       }
  form {
          margin: 70px 200px;
          padding: 15px;
          background-color: rgba(255,255,255, .5);
          border-radius: 25pt;
          display: grid;
          justify-content: center;
          overflow: hidden;
          z-index: 1;
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
  h1{
    
     color: #562B08;
    text-align: center;
  }

#btn:hover{
  transform: translateY(-5px);
  box-shadow: 0px 5px 5px 0px black;  
}
#email,#project,#name,#mobile,#prn,#Gender {
 border:none;	
 outline:none;
 border-bottom:2px solid #e74c3c;	
 margin-bottom: 10px;
 background: transparent;
}
  .fill{
    display: flex;
  }
  .member{
    border: 2px solid #967E76;
    margin: 5px;
    border-radius: 5pt;
    justify-content: center;
  }
  legend{
    color: #404258;
    }
</style>
<body>
    <div class="container">
    <form action="home.php" enctype="multipart/form-data" method="post">
            <h1>Fill Project Details</h1>
            <i>
                Project Name :- <input type="text" name="PName" id="name" placeholder="Enter Project Name..." /></i>
            <i>
                Project Technology :- <input type="text" Name="Technology" id="project" placeholder="Project Technology..." />
            </i>
            <i>
                Project Goal :- <input type="text" name="Goal" id="Project" placeholder="Project Goal..." /> 
            </i>
            <i>
              Upload Your Source Code (Zip File) :-
                <label for="Zip" class="fa fa-upload fa-2x" style="cursor:pointer;">
                </label>
                  <input type="file" id="Zip" accept=".zip" name="Zip" style="display:none;" required>
  </i>
            <i>Upload Photos 1 :-
                <label for="Photos1" class="fa fa-upload fa-2x" style="cursor:pointer;">
                </label>
                  <input type="file" id="Photos1" name="Front" accept=".jpg,.png,.jpeg" style="display:none;" required>
            </i>
            <i>Upload Photos 2 :-
                <label for="Photos2" class="fa fa-upload fa-2x" style="cursor:pointer;">
                </label>
                  <input type="file" id="Photos2" name="Back" accept=".jpg,.png,.jpeg" style="display:none;" required>
            </i>
             <div class="fill">
                <fieldset class="member">
                  <legend><h3>Member 1</h3></legend>
                  <i>
                     Name :- <input type="text" name="Member1" id="name" placeholder="Enter Name..." />
                  </i><br>
                  <i>
                      E-Mail :- <input type="email" name="M1email" id="email" placeholder="Enter Email..." />
                  </i><br>
                  <i>
                    Roll No :- <input type="number" name="M1roll" id="Mobile" placeholder="Enter Roll Number...."/>
                  </i><br>
                  <i>
                    PRN No :- <input type="Number" name="M1prn" id="prn" min="2000000000000000" max="3000000000000000" placeholder="PRN Number...." />
                  </i><br>
                  <i>Gender :- <select name="M1gender" id="Gender">
              <option name="M1gender" value="Male">Male</option>
              <option name="M1gender" value="Female">Female</option>
              <option name="M1gender" value="Other">Other</option>
            </select> </i>
            </fieldset>
            <fieldset class="member">
              <legend><h3>Member 2</h3></legend>
              <i> Name :- <input type="text" name="Member2" id="name" placeholder="Enter Name..." /></i><br>
              <i> E-Mail :- <input type="email" name="M2email" id="email" placeholder="Enter Email..." /></i><br>
          <i>
            Roll No :- <input type="number" name="M2roll" id="Mobile" placeholder="Enter Roll Number...."/></i><br>
          <i>
            PRN No :- <input type="Number" name="M2prn" id="prn" min="2000000000000000" max="3000000000000000" placeholder="PRN Number...." /></i><br>
          <i>Gender :- <select name="M2gender" id="Gender">
              <option name="M2gender" value="Male">Male</option>
              <option name="M2gender" value="Female">Female</option>
              <option name="M2gender" value="Other">Other</option>
            </select> </i>
            </fieldset>
            <fieldset class="member">
              <legend><h3>Member 3</h3></legend>
              <i> Name :- <input type="text" name="Member3" id="name" Value="Null" placeholder="Enter Name..." /></i><br>
              <i> E-Mail :- <input type="text" name="M3email" id="email" Value="Null" placeholder="Enter Email..." /></i><br>
          <i>
            Roll No :- <input type="number" name="M3roll" id="Mobile" Value="Null" placeholder="Enter Roll Number...."/></i><br>
          <i>
            PRN No :- <input type="Number" Name="M3prn" id="prn" min="2000000000000000" max="3000000000000000" Value="Null" placeholder="PRN Number...." /></i><br>
          <i>Gender :- <select name="M3gender" id="Gender">
              <option name="M3gender" value="Male">Male</option>
              <option name="M3gender" value="Female">Female</option>
              <option name="M3gender" value="Other">Other</option>
            </select> </i>
            </fieldset>
            </div>
          <input type="submit" name="Click" value="Submit" id="btn">
          
        </form>
    </div>
</body>
  <?php
  include("upl/Footer.php");
}
  elseif(isset($_GET['new']))
  {
    ?>
    <html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


    <title>Fill Project Details </title>
</head>
<style>
  *{
    font-family: 'Roboto', sans-serif;
   }
  body {
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
          background-image: url("http://www.pixelstalk.net/wp-content/uploads/2016/10/Nature-background-free-download.jpg");
          z-index: 0;
       }
  form {
          margin: 70px 200px;
          padding: 15px;
          background-color: rgba(255,255,255, .5);
          border-radius: 25pt;
          display: grid;
          justify-content: center;
          overflow: hidden;
          z-index: 1;
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
  h1{
    
     color: #562B08;
    text-align: center;
  }

#btn:hover{
  transform: translateY(-5px);
  box-shadow: 0px 5px 5px 0px black;  
}
#email,#project,#name,#mobile,#prn,#Gender {
 border:none;	
 outline:none;
 border-bottom:2px solid #e74c3c;	
 margin-bottom: 10px;
 background: transparent;
}
  .fill{
    display: flex;
  }
  .member{
    border: 2px solid #967E76;
    margin: 5px;
    border-radius: 5pt;
    justify-content: center;
  }
  legend{
    color: #404258;
    }
</style>
<body>
    <div class="container">
    <form action="home.php" enctype="multipart/form-data" method="post">
            <h1>Fill Project Details</h1>
            <i>
                Project Name :- <input type="text" name="PName" id="name" placeholder="Enter Project Name..." /></i>
            <i>
                Project Technology :- <input type="text" Name="Technology" id="project" placeholder="Project Technology..." />
            </i>
            <i>
                Project Goal :- <input type="text" name="Goal" id="Project" placeholder="Project Goal..." /> 
            </i>
            <i>
              Upload Your Source Code (Zip File) :-
                <label for="Zip" class="fa fa-upload fa-2x" style="cursor:pointer;">
                </label>
                  <input type="file" id="Zip" accept=".zip" name="Zip" style="display:none;" required>
  </i>
            <i>Upload Photos 1 :-
                <label for="Photos1" class="fa fa-upload fa-2x" style="cursor:pointer;">
                </label>
                  <input type="file" id="Photos1" name="Front" accept=".jpg,.png,.jpeg" style="display:none;" required>
            </i>
            <i>Upload Photos 2 :-
                <label for="Photos2" class="fa fa-upload fa-2x" style="cursor:pointer;">
                </label>
                  <input type="file" id="Photos2" name="Back" accept=".jpg,.png,.jpeg" style="display:none;" required>
            </i>
             <div class="fill">
                <fieldset class="member">
                  <legend><h3>Member 1</h3></legend>
                  <i>
                     Name :- <input type="text" name="Member1" id="name" placeholder="Enter Name..." />
                  </i><br>
                  <i>
                      E-Mail :- <input type="email" name="M1email" id="email" placeholder="Enter Email..." />
                  </i><br>
                  <i>
                    Roll No :- <input type="number" name="M1roll" id="Mobile" placeholder="Enter Roll Number...."/>
                  </i><br>
                  <i>
                    PRN No :- <input type="Number" name="M1prn" id="prn" min="2000000000000000" max="3000000000000000" placeholder="PRN Number...." />
                  </i><br>
                  <i>Gender :- <select name="M1gender" id="Gender">
              <option name="M1gender" value="Male">Male</option>
              <option name="M1gender" value="Female">Female</option>
              <option name="M1gender" value="Other">Other</option>
            </select> </i>
            </fieldset>
            <fieldset class="member">
              <legend><h3>Member 2</h3></legend>
              <i> Name :- <input type="text" name="Member2" id="name" placeholder="Enter Name..." /></i><br>
              <i> E-Mail :- <input type="email" name="M2email" id="email" placeholder="Enter Email..." /></i><br>
          <i>
            Roll No :- <input type="number" name="M2roll" id="Mobile" placeholder="Enter Roll Number...."/></i><br>
          <i>
            PRN No :- <input type="Number" name="M2prn" id="prn" min="2000000000000000" max="3000000000000000" placeholder="PRN Number...." /></i><br>
          <i>Gender :- <select name="M2gender" id="Gender">
              <option name="M2gender" value="Male">Male</option>
              <option name="M2gender" value="Female">Female</option>
              <option name="M2gender" value="Other">Other</option>
            </select> </i>
            </fieldset>
            <fieldset class="member">
              <legend><h3>Member 3</h3></legend>
              <i> Name :- <input type="text" name="Member3" id="name" Value="Null" placeholder="Enter Name..." /></i><br>
              <i> E-Mail :- <input type="text" Value="Null" name="M3email" id="email" placeholder="Enter Email..." /></i><br>
          <i>
            Roll No :- <input type="number" name="M3roll" Value="Null" id="Mobile" placeholder="Enter Roll Number...."/></i><br>
          <i>
            PRN No :- <input type="Number" Name="M3prn" Value="Null" id="prn" min="2000000000000000" max="3000000000000000" placeholder="PRN Number...." /></i><br>
          <i>Gender :- <select name="M3gender" id="Gender">
              <option name="M3gender" value="Male">Male</option>
              <option name="M3gender" value="Female">Female</option>
              <option name="M3gender" value="Other">Other</option>
            </select> </i>
            </fieldset>
            </div>
          <input type="submit" name="Click" value="Submit" id="btn">
          
        </form>
    </div>
</body></html>

 <?php } else
			{
				
					echo "<meta http-equiv='Refresh' content='0;url=Ragistration.php'>";
		   
			}
	?>
</html>
    <?php } ?>