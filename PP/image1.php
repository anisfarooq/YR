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
$id = 1;
$q = "SELECT * From HP where id='$id'";
$r = mysql_query("$q",$conn);
if($r)
{
$row = mysql_fetch_array($r);
header("Content-type: image/jpeg");
echo $row['img'];
}
else
{
echo mysql_error();
}
?>