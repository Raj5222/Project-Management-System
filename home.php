<?php
include("config.php");
error_reporting(0);
if (isset($_POST['Click']))
      $cpname=$_POST['PName'];
      $sqluser="SELECT * FROM projects WHERE PName='$cpname' ";
      $qresult=mysqli_query($con, $sqluser);
      $count=mysqli_num_rows($qresult);
      if($count)
      {
           echo "<script>alert('Same Project Not Allowed.');</script>";
		   echo "<meta http-equiv='Refresh' content='0.5;url=Project Details.php?new'>";
       
           
      }
      else
      {

if(isset($_POST['Click'])){
//Zip File Uploding
$fileName = $_FILES["Zip"]["name"]; // The file name
$fileTmpLoc = $_FILES["Zip"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["Zip"]["type"]; // The type of file it is
$fileSize =($_FILES["Zip"]["size"] / 1024/1024); // File size in bytes
$fileErrorMsg = $_FILES["Zip"]["error"]; // 0 for false... and 1 for true

if (!$fileTmpLoc) { // if file not chosen
    echo "<script>alert(' You Have No Selected Zip File.\\n Please Select Any File.')</script>";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "C:/xampp/htdocs/Pmj/Files/Source/$fileName")){
$new = array("File Is No Found.");
$zippath = ("http://localhost/Pmj/Files/Source/$fileName");
echo "<script> alert(' File :- $fileName \\n Status :- Uploading Complete.')</script>";//Run Switch Condition And Set $path[0]
} else {
    echo "<script>alert(' File :- $fileName \\n Status :- move_uploaded_file Function Failed')</script>";
}

//Front Side Photo Uploding
$fileName = $_FILES["Front"]["name"]; // The file name
$fileTmpLoc = $_FILES["Front"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["Front"]["type"]; // The type of file it is
$fileSize =($_FILES["Front"]["size"] / 1024/1024); // File size in bytes
$fileErrorMsg = $_FILES["Front"]["error"]; // 0 for false... and 1 for true

if (!$fileTmpLoc) { // if file not chosen
    echo "<script>alert(' You Have No Selected Photos 1 .\\n Please Select File.')</script>";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "C:/xampp/htdocs/Pmj/Files/images/$fileName")){
$new = array("File Is No Found.");
$frontpath = ("http://localhost/Pmj/Files/images/$fileName");
echo "<script>alert(' File :- $fileName \\n Status :- Uploading Complete.')</script>";//Run Switch Condition And Set $path[0]
} else {
    echo "<script>alert(' File :- $fileName \\n Status :- move_uploaded_file Function Failed')</script>";
}

//Back side Photo Uploding
$fileName = $_FILES["Back"]["name"]; // The file name
$fileTmpLoc = $_FILES["Back"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["Back"]["type"]; // The type of file it is
$fileSize =($_FILES["Back"]["size"] / 1024/1024); // File size in bytes
$fileErrorMsg = $_FILES["Back"]["error"]; // 0 for false... and 1 for true

if (!$fileTmpLoc) { // if file not chosen
    echo "<script>alert(' You Have No Selected Any Photos 2.\\n Please Select File.')</script>";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "C:/xampp/htdocs/Pmj/Files/images/$fileName")){
$new = array("File Is No Found.");
$backpath = ("http://localhost/Pmj/Files/images/$fileName");
echo "<script>alert(' File :- $fileName \\n Status :- Uploading Complete.')</script>";//Run Switch Condition And Set $path[0]
} else {
    echo "<script>alert(' File :- $fileName \\n Status :- move_uploaded_file Function Failed')</script>";
}
	
	include("config.php");
    if(isset($_POST['Click']))
    {
		$PName=$_POST['PName'];
		$Technology=$_POST['Technology'];
		$Goal=$_POST['Goal'];
        $Member1=$_POST['Member1'];
		$Member2=$_POST['Member2'];
		$Member3=$_POST['Member3'];
		$M1roll=$_POST['M1roll'];
		$M2roll=$_POST['M2roll'];
		$M3roll=$_POST['M3roll'];
		$M1prn=$_POST['M1prn'];
		$M2prn=$_POST['M2prn'];
		$M3prn=$_POST['M3prn'];
		$M1email=$_POST['M1email'];
		$M2email=$_POST['M2email'];
		$M3email=$_POST['M3email'];
		$M1gender=$_POST['M1gender'];
		$M2gender=$_POST['M2gender'];
		$M3gender=$_POST['M3gender'];
        $sql="insert into members(Member1, Member2, Member3, M1roll, M2roll, M3roll, M1prn, M2prn, M3prn, M1email, M2email, M3email, M1gender, M2gender, M3gender)
        value('$Member1', '$Member2', '$Member3', '$M1roll', '$M2roll', '$M3roll', '$M1prn', '$M2prn', '$M3prn', '$M1email', '$M2email', '$M3email', '$M1roll', '$M2gender', '$M3gender')";
		$sql1="insert into projects(PName, Technology, Goal, Zipfile, Front, Back)
        value('$PName', '$Technology', '$Goal', '$zippath', '$frontpath', '$backpath')";
        $result = mysqli_query($con,$sql);
		$result1 = mysqli_query($con,$sql1);
        if($result)
        {
            echo "<script>alert('Project Submited.');</script>";
        }	
    }
?>
<html>		
	<head>
		<style>
			@import url('https://fonts.googleapis.com/css?family=Lato');
				*, *::after, *::before 
				{
					margin: 0;
					padding: 0;
					box-sizing: border-box;
				}

			body {
					min-height: 100vh;
					padding: 40px;
					display: flex;
					flex-wrap: wrap;
					justify-content: center;
					align-items: center;
					background-size: 100% 100%;
					background-attachment:fixed;
					background-repeat: no-repeat;
					font-family: "Lato", "Segoe Ui", -apple-system, BlinkMacSystemFont, sans-serif;
				}
			.flip-card-container {
					--hue: 150;
					--primary: hsl(var(--hue), 50%, 50%);
					--white-1: hsl(0, 0%, 90%);
					--white-2: hsl(0, 0%, 80%);
					--dark: hsl(var(--hue), 25%, 10%);
					--grey: hsl(0, 0%, 50%);

					width: 370px;
					height: 500px;
					margin: 40px;
					perspective: 1500px;
					display: flex;
				}	
			.flip-card {
					width: inherit;
					height: inherit;
					position: relative;
					transform-style: preserve-3d;
					transition: .6s .1s;
				}
					.flip-card-container:hover .flip-card,	.flip-card-container:focus-within .flip-card {
					transform: rotateY(180deg);
				}
					.card-front,	.card-back {
					width: 100%;
					height: 100%;
					border-radius: 24px;
					background: var(--dark);
					position: absolute;
					top: 0;
					left: 0;
					overflow: hidden;
					backface-visibility: hidden;
					display: flex;
					justify-content: center;
					align-items: center;
				}
			.card-front {
					transform: rotateY(0deg);
					z-index: 2;
				}
			.card-back {
					transform: rotateY(180deg);
					z-index: 1;
				}
			figure {
					z-index: -1;
				}
			figure,	.img-bg {
					position: absolute;
					top: 0;
					left: 0;
				
					width: 100%;
					height: 100%;
				}
			img {
					height: 100%;
					border-radius: 24px;
				}
			figcaption {
					display: block;
					width: auto;
					margin-top: 12%;
					border-radius: 10pt;
					padding: 8px 22px;
					font-weight: bold;
					line-height: 1.6;
					letter-spacing: 2px;
					word-spacing: 6px;
					text-align: right;
					position: absolute;
					top: 0;
					right: 12px;
					color: var(--white-1);
					background: hsla(var(--hue), 25%, 10%, .5);
				}
			.img-bg {
					background: hsla(var(--hue), 25%, 10%, .5);
					background-size:cover;
				}
			.card-front .img-bg {
					clip-path: polygon(0 20%, 100% 40%, 100% 100%, 0 100%);
					background-size:cover;
				}
			.card-front .img-bg::before {
					content: "";
					position: absolute;
					top: 34%;
					left: 50%;
					transform: translate(-50%, -50%) rotate(18deg);
					width: 100%;
					height: 6px;
					border: 1px solid var(--primary);
					border-left-color: transparent;
					border-right-color: transparent;
					transition: .1s;
				}
			.card-back .img-bg {
					clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
					background-size:cover;
				}
			.flip-card-container:hover .card-front .img-bg::before {
					width: 6px;
					border-left-color: var(--primary);
					border-right-color: var(--primary);
				}
			ul {
					padding-top: 50%;
					margin: 0 auto;	
					width: 70%;
					height: 100%;
					list-style: none;
					color: var(--white-1);
					display: flex;
					justify-content: center;
					align-items: center;
					flex-direction: column;
				}
			li {
					width: 100%;
					margin-top: 12px;
					padding-bottom: 12px;
					font-size: 14px;
					text-align: center;
					position: relative;
				}
			li:nth-child(2n) {
					color: var(--white-2);
				}
			li:not(:last-child)::after {
					content: "";
					position: absolute;
					bottom: 0;
					left: 0;
					width: 100%;
					height: 1px;
					background: currentColor;
					opacity: .2;
				}
			button {
					font-family: inherit;
					font-weight: bold;
					color: var(--white-1);
					letter-spacing: 2px;
					padding: 9px 20px;
					border: 1px solid var(--grey);
					border-radius: 1000px;
					background: transparent;
					transition: .3s;
					cursor: pointer;					
				}
					button:hover,	button:focus {
					color: var(--primary);
					background: hsla(var(--hue), 25%, 10%, .2);
					border-color: currentColor;
				}
			button:active {
					transform: translate(2px);
				}
			.design-container {
					--tr: 90;
					--op: .5;
					width: 100%;
					height: 100%;
					background: transparent;
					position: absolute;
					top: 0;
					left: 0;
					pointer-events: none;
				}
			.design {
					display: block;
					background: var(--grey);
					position: absolute;
					opacity: var(--op);
					transition: .3s;
				}
			.design--1,	.design--2,	.design--3,	.design--4 {
					width: 1px;
					height: 100%;
				}	
			.design--1,	.design--2 {
					top: 0;	
					transform: translateY(calc((var(--tr) - (var(--tr) * 2)) * 1%))
				}
			.design--1 {
					left: 20%;
				}
			.design--2 {
					left: 80%;
				}
			.design--3,	.design--4 {
					bottom: 0;
					transform: translateY(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%));
				}
			.design--3 {
					left: 24%;
				}
			.design--4 {
					left: 76%;
				}
			.design--5,	.design--6,	.design--7,	.design--8 {
					width: 100%;
					height: 1px;
				}
			.design--5,	.design--6 {
					left: 0;
					transform: translateX(calc((var(--tr) - (var(--tr) * 2)) * 1%));
				}
			.design--5 {
					top: 41%;
				}
			.design--6 {
					top: 59%;
				}	
			.design--7, .design--8 {
					right: 0;
					transform: translateX(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%))
				}
			.design--7 {
					top: 44%;
				}
			.design--8 {
					top: 56%;
				}
					button:hover+.design-container,	button:active+.design-container, button:focus+.design-container {
					--tr: 20;
					--op: .7;
				}
			
		</style>
		<link rel="icon" type="image/x-icon" href="https://drive.google.com/uc?export=view&id=1f0uhMVn73ykAPibmEAmjC629DXo_VYwP">
	</head>
<body background="https://assets.imgix.net/hp/snowshoe.jpg?auto=compress&w=900&h=600&fit=crop">
<?php
       $sql="select * from projects";
    	$result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
                {
                    ?>
		<div class="flip-card-container" style="--hue: 220">
		<div class="flip-card">
			<div class="card-front">
				<figure>
					<div class="img-bg"></div>
						<img src="<?php echo $row['Front']; ?>" alt="csspoints" />
							<figcaption>Project <?php echo $row['Pid']; ?></figcaption>
				</figure>
					<ul>
						<li>Title :- <?php echo $row['PName']; ?></li>
						<li>Technology :- <?php echo $row['Technology']; ?></li>
						<li>Goal :- <?php echo $row['Goal']; ?></li>
					</ul>
				</div>
			<div class="card-back">
				<figure>
					<div class="img-bg"></div>
						<img src="<?php echo $row['Back']; ?>" alt="csspoints" />
				</figure>
					<button onclick="window.location.href = '<?php echo $row['Zipfile']; ?>';">Dawnload</button>
					<button onclick="window.location.href = '?edit=<?php echo $row['Pid']; ?>';">Edit</button>
						<div class="design-container">
							<span class="design design--1"></span>
							<span class="design design--2"></span>
							<span class="design design--3"></span>
							<span class="design design--4"></span>
							<span class="design design--5"></span>
							<span class="design design--6"></span>
							<span class="design design--7"></span>
							<span class="design design--8"></span>
						</div>
					</div>
				</div>
			</div>
			<?php
				}
			?>
	</body>
	<?php
	include("upl/Navigation.php");
  include("upl/Footer.php");
			}
			elseif(isset($_GET['id'])){ ?>
				<html>		
	<head>
		<style>
			@import url('https://fonts.googleapis.com/css?family=Lato');
				*, *::after, *::before 
				{
					margin: 0;
					padding: 0;
					box-sizing: border-box;
				}

			body {
					min-height: 100vh;
					padding: 40px;
					display: flex;
					flex-wrap: wrap;
					justify-content: center;
					align-items: center;
					background-size: 100% 100%;
					background-attachment:fixed;
					background-repeat: no-repeat;
					font-family: "Lato", "Segoe Ui", -apple-system, BlinkMacSystemFont, sans-serif;
				}
			.flip-card-container {
					--hue: 150;
					--primary: hsl(var(--hue), 50%, 50%);
					--white-1: hsl(0, 0%, 90%);
					--white-2: hsl(0, 0%, 80%);
					--dark: hsl(var(--hue), 25%, 10%);
					--grey: hsl(0, 0%, 50%);

					width: 370px;
					height: 500px;
					margin: 40px;
					perspective: 1500px;
					display: flex;
				}	
			.flip-card {
					width: inherit;
					height: inherit;
					position: relative;
					transform-style: preserve-3d;
					transition: .6s .1s;
				}
					.flip-card-container:hover .flip-card,	.flip-card-container:focus-within .flip-card {
					transform: rotateY(180deg);
				}
					.card-front,	.card-back {
					width: 100%;
					height: 100%;
					border-radius: 24px;
					background: var(--dark);
					position: absolute;
					top: 0;
					left: 0;
					overflow: hidden;
					backface-visibility: hidden;
					display: flex;
					justify-content: center;
					align-items: center;
				}
			.card-front {
					transform: rotateY(0deg);
					z-index: 2;
				}
			.card-back {
					transform: rotateY(180deg);
					z-index: 1;
				}
			figure {
					z-index: -1;
				}
			figure,	.img-bg {
					position: absolute;
					top: 0;
					left: 0;
				
					width: 100%;
					height: 100%;
				}
			img {
					height: 100%;
					border-radius: 24px;
				}
			figcaption {
					display: block;
					width: auto;
					margin-top: 12%;
					border-radius: 10pt;
					padding: 8px 22px;
					font-weight: bold;
					line-height: 1.6;
					letter-spacing: 2px;
					word-spacing: 6px;
					text-align: right;
					position: absolute;
					top: 0;
					right: 12px;
					color: var(--white-1);
					background: hsla(var(--hue), 25%, 10%, .5);
				}
			.img-bg {
					background: hsla(var(--hue), 25%, 10%, .5);
					background-size:cover;
				}
			.card-front .img-bg {
					clip-path: polygon(0 20%, 100% 40%, 100% 100%, 0 100%);
					background-size:cover;
				}
			.card-front .img-bg::before {
					content: "";
					position: absolute;
					top: 34%;
					left: 50%;
					transform: translate(-50%, -50%) rotate(18deg);
					width: 100%;
					height: 6px;
					border: 1px solid var(--primary);
					border-left-color: transparent;
					border-right-color: transparent;
					transition: .1s;
				}
			.card-back .img-bg {
					clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
					background-size:cover;
				}
			.flip-card-container:hover .card-front .img-bg::before {
					width: 6px;
					border-left-color: var(--primary);
					border-right-color: var(--primary);
				}
			ul {
					padding-top: 50%;
					margin: 0 auto;	
					width: 70%;
					height: 100%;
					list-style: none;
					color: var(--white-1);
					display: flex;
					justify-content: center;
					align-items: center;
					flex-direction: column;
				}
			li {
					width: 100%;
					margin-top: 12px;
					padding-bottom: 12px;
					font-size: 14px;
					text-align: center;
					position: relative;
				}
			li:nth-child(2n) {
					color: var(--white-2);
				}
			li:not(:last-child)::after {
					content: "";
					position: absolute;
					bottom: 0;
					left: 0;
					width: 100%;
					height: 1px;
					background: currentColor;
					opacity: .2;
				}
			button {
					font-family: inherit;
					font-weight: bold;
					color: var(--white-1);
					letter-spacing: 2px;
					padding: 9px 20px;
					border: 1px solid var(--grey);
					border-radius: 1000px;
					background: transparent;
					transition: .3s;
					cursor: pointer;					
				}
					button:hover,	button:focus {
					color: var(--primary);
					background: hsla(var(--hue), 25%, 10%, .2);
					border-color: currentColor;
				}
			button:active {
					transform: translate(2px);
				}
			.design-container {
					--tr: 90;
					--op: .5;
					width: 100%;
					height: 100%;
					background: transparent;
					position: absolute;
					top: 0;
					left: 0;
					pointer-events: none;
				}
			.design {
					display: block;
					background: var(--grey);
					position: absolute;
					opacity: var(--op);
					transition: .3s;
				}
			.design--1,	.design--2,	.design--3,	.design--4 {
					width: 1px;
					height: 100%;
				}	
			.design--1,	.design--2 {
					top: 0;	
					transform: translateY(calc((var(--tr) - (var(--tr) * 2)) * 1%))
				}
			.design--1 {
					left: 20%;
					}
			.design--2 {
					left: 80%;
				}
			.design--3,	.design--4 {
					bottom: 0;
					transform: translateY(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%));
				}
			.design--3 {
					left: 24%;
				}
			.design--4 {
					left: 76%;
				}
			.design--5,	.design--6,	.design--7,	.design--8 {
					width: 100%;
					height: 1px;
				}
			.design--5,	.design--6 {
					left: 0;
					transform: translateX(calc((var(--tr) - (var(--tr) * 2)) * 1%));
				}
			.design--5 {
					top: 41%;
				}
			.design--6 {
					top: 59%;
				}	
			.design--7, .design--8 {
					right: 0;
					transform: translateX(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%))
				}
			.design--7 {
					top: 44%;
				}
			.design--8 {
					top: 56%;
				}
					button:hover+.design-container,	button:active+.design-container, button:focus+.design-container {
					--tr: 20;
					--op: .7;
				}
			
		</style>
		<link rel="icon" type="image/x-icon" href="https://drive.google.com/uc?export=view&id=1f0uhMVn73ykAPibmEAmjC629DXo_VYwP">
	</head>
<body background="https://assets.imgix.net/hp/snowshoe.jpg?auto=compress&w=900&h=600&fit=crop">
<?php
       $sql="select * from projects";
    	$result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
                {
                    ?>
		<div class="flip-card-container" style="--hue: 220">
		<div class="flip-card">
			<div class="card-front">
				<figure>
					<div class="img-bg"></div>
						<img src="<?php echo $row['Front']; ?>" alt="csspoints" />
							<figcaption>Project <?php echo $row['Pid']; ?></figcaption>
				</figure>
					<ul>
						<li>Title :- <?php echo $row['PName']; ?></li>
						<li>Technology :- <?php echo $row['Technology']; ?></li>
						<li>Goal :- <?php echo $row['Goal']; ?></li>
					</ul>
				</div>
			<div class="card-back">
				<figure>
					<div class="img-bg"></div>
						<img src="<?php echo $row['Back']; ?>" alt="csspoints" />
				</figure>
					<button onclick="window.location.href = '<?php echo $row['Zipfile']; ?>';">Dawnload</button>
					<button onclick="window.location.href = '?edit=<?php echo $row['Pid']; ?>';">Edit</button>
						<div class="design-container">
							<span class="design design--1"></span>
							<span class="design design--2"></span>
							<span class="design design--3"></span>
							<span class="design design--4"></span>
							<span class="design design--5"></span>
							<span class="design design--6"></span>
							<span class="design design--7"></span>
							<span class="design design--8"></span>
						</div>
					</div>
				</div>
			</div>
			<?php
				}
			?>
	</body>
	<?php
	include("upl/Navigation.php");
  include("upl/Footer.php");
			}
			elseif(isset($_GET['edit']))
			{ ?>
				<html>		
	<head>
		<style>
			@import url('https://fonts.googleapis.com/css?family=Lato');
				*, *::after, *::before 
				{
					margin: 0;
					padding: 0;
					box-sizing: border-box;
				}

			body {
					min-height: 100vh;
					padding: 40px;
					display: flex;
					flex-wrap: wrap;
					justify-content: center;
					align-items: center;
					background-size: 100% 100%;
					background-attachment:fixed;
					background-repeat: no-repeat;
					font-family: "Lato", "Segoe Ui", -apple-system, BlinkMacSystemFont, sans-serif;
				}
			.flip-card-container {
					--hue: 150;
					--primary: hsl(var(--hue), 50%, 50%);
					--white-1: hsl(0, 0%, 90%);
					--white-2: hsl(0, 0%, 80%);
					--dark: hsl(var(--hue), 25%, 10%);
					--grey: hsl(0, 0%, 50%);
			
					width: 600px;
					height: 600px;
					margin: 40px;
					perspective: 1500px;
					display: flex;
				}
					.card-front{
					width: 100%;
					height: 100%;
					border-radius: 24px;
					background: var(--dark);
					position: absolute;
					top: 0;
					left: 0;
					overflow: hidden;
					backface-visibility: hidden;
					display: flex;
					justify-content: center;
					align-items: center;
				}
			.card-front {
					transform: rotateY(0deg);
					z-index: 2;
				}
			figure {
					z-index: -1;
				}
			figure,	.img-bg {
					position: absolute;
					top: 0;
					left: 0;
				
					width: 100%;
					height: 100%;
				}
			img {
					height: 100%;
					border-radius: 24px;
				}
			figcaption {
					display: block;
					width: auto;
					margin-top: 12%;
					border-radius: 10pt;
					padding: 8px 22px;
					font-weight: bold;
					line-height: 1.6;
					letter-spacing: 2px;
					word-spacing: 6px;
					text-align: right;
					position: absolute;
					top: 0;
					right: 12px;
					color: var(--white-1);
					background: hsla(var(--hue), 25%, 10%, .5);
				}
			.img-bg {
					background: hsla(var(--hue), 25%, 10%, .5);
					background-size:cover;
				}
			.card-front .img-bg {
					clip-path: polygon(0 20%, 100% 40%, 100% 100%, 0 100%);
					background-size:cover;
				}
			.card-front .img-bg::before {
					content: "";
					position: absolute;
					top: 34%;
					left: 50%;
					transform: translate(-50%, -50%) rotate(18deg);
					width: 100%;
					height: 6px;
					border: 1px solid var(--primary);
					border-left-color: transparent;
					border-right-color: transparent;
					transition: .1s;
				}
			.card-back .img-bg {
					clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
					background-size:cover;
				}
			.flip-card-container:hover .card-front .img-bg::before {
					width: 6px;
					border-left-color: var(--primary);
					border-right-color: var(--primary);
				}
			ul {
					padding-top: 50%;
					margin: 0 auto;	
					width: 70%;
					height: 100%;
					list-style: none;
					color: var(--white-1);
					display: flex;
					justify-content: center;
					align-items: center;
					pedding-left : 5px;
					
				}
			li {
					position: inherit;
					width: 100%;
					margin-top: 12px;
					padding-bottom: 12px;
					font-size: 14px;
					text-align: center;
					position: relative;
					bottom: 100px;
				}
			li:nth-child(2n) {
					color: var(--white-2);
				}
			li:not(:last-child)::after {
					content: "";
					position: absolute;
					bottom: 0;
					left: 0;
					width: 100%;
					height: 1px;
					background: currentColor;
					opacity: .2;
				}
			button {
					font-family: inherit;
					font-weight: bold;
					color: var(--white-1);
					letter-spacing: 2px;
					padding: 9px 20px;
					border: 1px solid var(--grey);
					border-radius: 1000px;
					background: transparent;
					transition: .3s;
					cursor: pointer;					
				}
			.design-container {
					--tr: 90;
					--op: .5;
					width: 100%;
					height: 100%;
					background: transparent;
					position: absolute;
					top: 0;
					left: 0;
					pointer-events: none;
				}
			.design {
					display: block;
					background: var(--grey);
					position: absolute;
					opacity: var(--op);
					transition: .3s;
				}
			.design--1,	.design--2,	.design--3,	.design--4 {
					width: 1px;
					height: 100%;
				}	
			.design--1,	.design--2 {
					top: 0;	
					transform: translateY(calc((var(--tr) - (var(--tr) * 2)) * 1%))
				}
			.design--1 {
					left: 20%;
				}
			.design--2 {
					left: 80%;
				}
			.design--3,	.design--4 {
					bottom: 0;
					transform: translateY(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%));
				}
			.design--3 {
					left: 24%;
				}
			.design--4 {
					left: 76%;
				}
			.design--5,	.design--6,	.design--7,	.design--8 {
					width: 100%;
					height: 1px;
				}
			.design--5,	.design--6 {
					left: 0;
					transform: translateX(calc((var(--tr) - (var(--tr) * 2)) * 1%));
				}
			.design--5 {
					top: 41%;
				}
			.design--6 {
					top: 59%;
				}	
			.design--7, .design--8 {
					right: 0;
					transform: translateX(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%))
				}
			.design--7 {
					top: 44%;
				}
			.design--8 {
					top: 56%;
				}
					button:hover+.design-container,	button:active+.design-container, button:focus+.design-container {
					--tr: 20;
					--op: .7;
				}
			input {
					border:none;	
 					outline:none;
 					border-bottom:2px solid #e74c3c;	
 					margin-bottom: 10px;
					 color: var(--white-1);
 					background: transparent;
					margin: 5px; 
			}
			
		</style>
		<link rel="icon" type="image/x-icon" href="https://drive.google.com/uc?export=view&id=1f0uhMVn73ykAPibmEAmjC629DXo_VYwP">
	</head>
<body background="https://assets.imgix.net/hp/snowshoe.jpg?auto=compress&w=900&h=600&fit=crop">
<?php
	
		$edit=$_GET['edit'];
       $sql="select * from members where Uid='$edit'";
    	$result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
                {
                    ?>
		<div class="flip-card-container" style="--hue: 220">
		<div class="flip-card">
			<div class="card-front">
				<figure>
					<div class="img-bg"></div>
						<img src="https://source.unsplash.com/user/erondu/800x600" alt="csspoints"/>
							<figcaption>Group <?php echo $row['Uid']; ?></figcaption>
				</figure>
					<Form action="profiles.php?upd=<?php echo $row['Uid'];?>" method="post">
					<ul>
						<li style= text-align:left;>Name :- <input type="text" name="Member1" value="<?php echo $row['Member1']; ?>"><br>
						Email :- <input type="email" name="M1email" value="<?php echo $row['M1email']; ?>"><br>
						Roll Number :- <input type="num" name="M1roll" value="<?php echo $row['M1roll']; ?>"><br>
						PRN Number :- <input type="num" name="M1prn" value="<?php echo $row['M1prn']; ?>"><br>
						Gender :- <input type="text" name="M1gender" value="<?php echo $row['M1gender']; ?>"></li>

						<li style= text-align:left;>Name :- <input type="text" name="Member2" value="<?php echo $row['Member2']; ?>"><br>
						Email :- <input type="email" name="M2email" value="<?php echo $row['M2email']; ?>"><br>
						Roll Number :- <input type="num" name="M2roll" value="<?php echo $row['M2roll']; ?>"><br>
						PRN Number :- <input type="num" name="M2prn" value="<?php echo $row['M2prn']; ?>"><br>
						Gender :- <input type="text" name="M2gender" value="<?php echo $row['M2gender']; ?>"></li>
						<li style= text-align:left;>Name :- <input type="text" name="Member3" value="<?php echo $row['Member3']; ?>"><br>
						Email :- <input type="email" name="M3email" value="<?php echo $row['M3email']; ?>"><br>
						Roll Number :- <input type="num" name="M3roll" value="<?php echo $row['M3roll']; ?>"><br>
						PRN Number :- <input type="num" name="M3prn" value="<?php echo $row['M3prn']; ?>"><br>
						Gender :- <input type="text" name="M3gender" value="<?php echo $row['M3gender']; ?>"></li>
						<input type="submit" value="submit" id="sub" name="edit" style="display:none;">
						<li>
							<button for="sub" style="position: fixed;bottom: 20;right: 10%">Update</button>
						</li>
					</ul>
				</form>
				</div>
				</div>
			</div>
			<?php
				}
			?>
	</body>
	<?php
	include("upl/Navigation.php");
  include("upl/Footer.php");
			}
			else
			{
				
					echo "<meta http-equiv='Refresh' content='0;url=./Temp/home.php'>";
		   
			}}
	?>
</html>