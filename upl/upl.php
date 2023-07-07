<?php
error_reporting(0);
$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize =($_FILES["file1"]["size"] / 1024/1024); // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo " You Have No Selected Any File.<br><br>Please Select Any File.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "D:/$fileName")){
echo "<font class='animation'>File :- $fileName <br><br>Status :- Uploading Complete. &#10003<br>";
$new = array("File Is No Found.");
$path = glob("D:/$fileName");
	echo "<br> Uploaded File Path :- ".$path[0].join($new)."</font>";//Join Argument Created.
//Run Switch Condition And Set $path[0]
} else {
    echo "<font color='red'>File :- $fileName <br><br>Status :- move_uploaded_file Function Failed</font>";
}
?>