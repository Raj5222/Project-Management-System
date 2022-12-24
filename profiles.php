<?php
include("config.php");
if(isset($_GET['pr']))
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
			
					width: 500px;
					height: 400px;
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
					flex-direction: column;
					
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
	$sql="select * from members";
    	$result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
                {
                    ?>
		<div class="flip-card-container" style="--hue: 220">
		<div class="flip-card">
			<div class="card-front">
				<figure>
					<div class="img-bg"></div>
						<img src="https://images.unsplash.com/photo-1559286023-3d27c0e06d80?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2ODY5ODIyMg&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=800" alt="csspoints"/>
							<figcaption>Group <?php echo $row['Uid']; ?></figcaption>
				</figure>
					<ul>
						<li style= text-align:left;>Name :- <?php echo $row['Member1']; ?><br>
						Email :- <?php echo $row['M1email']; ?><br>
						Roll Number :- <?php echo $row['M1roll']; ?><br>
						PRN Number :- <?php echo $row['M1prn']; ?><br>
						Gender :- <?php echo $row['M1gender']; ?></li>

						<li style= text-align:left;>Name :- <?php echo $row['Member2']; ?><br>
						Email :- <?php echo $row['M2email']; ?><br>
						Roll Number :- <?php echo $row['M2roll']; ?><br>
						PRN Number :- <?php echo $row['M2prn']; ?><br>
						Gender :- <?php echo $row['M2gender']; ?></li>
						<li style= text-align:left;>Name :- <?php echo $row['Member3']; ?><br>
						Email :- <?php echo $row['M3email']; ?><br>
						Roll Number :- <?php echo $row['M3roll']; ?><br>
						PRN Number :- <?php echo $row['M3prn']; ?><br>
						Gender :- <?php echo $row['M3gender']; ?></li>
					</ul>
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
			elseif(isset($_GET['upd']))
			{ 
				$Uid=$_GET['upd'];
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
				$sql="UPDATE members SET 
				Member1='$Member1', Member2='$Member2',	Member3='$Member3',M1roll='$M1roll',M2roll='$M2roll',M3roll='$M3roll',M1prn='$M1prn',M2prn='$M2prn',M3prn='$M3prn',M1email='$M1email',M2email='$M2email',M3email='$M3email',M1gender='$M1gender',M2gender='$M2gender',M3gender='$M3gender' WHERE Uid=$Uid";
        		$result = mysqli_query($con,$sql);
				if($result)
        	{
            	echo "<script>alert('Record Edited.');</script>";
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
			
					width: 500px;
					height: 400px;
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
					flex-direction: column;
					
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
	$sql="select * from members";
    	$result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
                {
                    ?>
		<div class="flip-card-container" style="--hue: 220">
		<div class="flip-card">
			<div class="card-front">
				<figure>
					<div class="img-bg"></div>
						<img src="https://images.unsplash.com/photo-1559286023-3d27c0e06d80?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2ODY5ODIyMg&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=800" alt="csspoints"/>
							<figcaption>Group <?php echo $row['Uid']; ?></figcaption>
				</figure>
					<ul>
						<li style= text-align:left;>Name :- <?php echo $row['Member1']; ?><br>
						Email :- <?php echo $row['M1email']; ?><br>
						Roll Number :- <?php echo $row['M1roll']; ?><br>
						PRN Number :- <?php echo $row['M1prn']; ?><br>
						Gender :- <?php echo $row['M1gender']; ?></li>

						<li style= text-align:left;>Name :- <?php echo $row['Member2']; ?><br>
						Email :- <?php echo $row['M2email']; ?><br>
						Roll Number :- <?php echo $row['M2roll']; ?><br>
						PRN Number :- <?php echo $row['M2prn']; ?><br>
						Gender :- <?php echo $row['M2gender']; ?></li>
						<li style= text-align:left;>Name :- <?php echo $row['Member3']; ?><br>
						Email :- <?php echo $row['M3email']; ?><br>
						Roll Number :- <?php echo $row['M3roll']; ?><br>
						PRN Number :- <?php echo $row['M3prn']; ?><br>
						Gender :- <?php echo $row['M3gender']; ?></li>
					</ul>
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
				
					echo "<meta http-equiv='Refresh' content='0;url=temp/home.php'>";
		   
			}
	?>
</html>