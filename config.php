<?php
$con = mysqli_connect("localhost","root");

mysqli_select_db($con,"form");

$sql="INSERT INTO login_form (username, password)VALUES('$_POST[username]','$_POST[password]')";

if ($con->query($sql))
  {
 echo "record added";  
  }
else
{
    echo "not inserted";
}

?>