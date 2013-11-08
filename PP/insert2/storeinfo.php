<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect("localhost","root","");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("test",$conn);
if(!$db)
{
echo mysql_error();
}
 
 $img = addslashes (file_get_contents($_FILES['img']['tmp_name']));
 $image = getimagesize($_FILES['img']['tmp_name']);
  
 $q ="INSERT INTO galr5 VALUES('','$img')";

 $r = mysql_query($q,$conn);
 if($r)
 {
  echo "Information stored sucess";
 }
else
{
echo mysql_error();
}



?>