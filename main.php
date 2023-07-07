<?php
    include("config.php");
    if(isset($_POST['Click']))
    {
    $un = $_POST['Email'];
    $pw = $_POST['Password'];

    $sql="select * from profiles where Email='$un' ";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result))
 {
        $check_Email = $row['Email'];
        $check_password = $row['Password'];
        $name = $row['Name'];
 }
    if ($pw == $check_password) {?>
        <html><head>
    <style>
        .loader { border: 16px solid #f3f3f3; border-top: 16px solid #3498db; border-radius: 50%; width: 120px; height: 120px; animation: spin 2s linear infinite; position: fixed; top: 40%; left: 40%; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body>
<div class="loader" ></div>
</body></html>
        <?php
        $message = "Welcome ".$name."";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<meta http-equiv='Refresh' content='3;url=home.php?id'>";

    } else {
        $message = "Wrong Password" ;
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<meta http-equiv='Refresh' content='1;url=index.php'>";
    }
}
else
{
    header("Location: ..");
}
    ?>