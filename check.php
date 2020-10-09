<?php

include './Connect.php';

$usName= $_POST["uname"];
$pass =$_POST["pass"];

$sql="SELECT * FROM tbluser where userName='".$usName."' and password='".$pass."';";
//$sql="select count(*) as match from tbluser where userName='".$usName."' and password='".$pass."';";
//$result= mysqli_query($con, $sql);
$result=$con->query($sql);
$get_row = $result->fetch_row();
if ($con->affected_rows >0)
{
    echo "<br><marquee style='background-color:green; color:white;'>Login Successfully &check; </marquee>";
}
 else {
    echo "<br><marquee style='background-color:red; color:white;'>Loging Failed</marquee>";
}
