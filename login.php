<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: products.php");
}
if(isset($_POST['btn-login']))
{
 $email=($_POST['email']);
 $upass = ($_POST['password']);
 echo $upass;
 $ucon=$conn;
 $res=("SELECT * FROM USERS WHERE EMAIL='$email'");
 $uinfo=oci_parse($ucon,$res);
 oci_execute($uinfo);
 $row = oci_fetch_array($uinfo, OCI_ASSOC);
 echo $upass;
 if($row['PASSWORD']==md5($upass))
 {
  $_SESSION['user'] = $row['FIRSTNAME'];
  echo "header";
  header("Location: products.php");
 }
 else
 {
	echo"invalid password";
	echo "{$row['password']}";
  
 }
 oci_free_statement($uinfo);
 oci_close($ucon);
}
?>