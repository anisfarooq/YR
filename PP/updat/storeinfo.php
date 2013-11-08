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
 $id=1;
 $img = addslashes (file_get_contents($_FILES['img']['tmp_name']));
 $image = getimagesize($_FILES['img']['tmp_name']);
  
 $q ="UPDATE hpp SET img='$img' WHERE id ='$id'";

 $r = mysql_query($q,$conn);
 if($r)
 {
  echo "Information update sucess";
 }
else
{
echo mysql_error();
}
?>