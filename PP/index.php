<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Yalla Riyadh</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<!--<link href="css/themes/jomkl.css" rel="stylesheet" type="text/css">
<link href="css/themes/jomkl.min.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>



<link rel="stylesheet" href="themes/yallaRiyadh2.min.css" />-->
<link href="css/themes/yallaRiyadh2.css" rel="stylesheet" type="text/css">
<link href="css/themes/yallaRiyadh2.min.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<!-- samsung -->
</head>

<body>
<!--This is Home page -->
<div data-role="page" id="home" data-theme="a">
  <div data-role="header">
    <h1><img src="images/title.gif" width="107" height="34"></h1>
  </div>
  <div data-role="content">
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect("localhost:3306","root","");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("test",$conn);
if(!$db)
{
echo mysql_error();
}
$q = "SELECT * From HP";
$r = mysql_query("$q",$conn);
if($r)
{
if($id=1)
{
echo "<img class='resize' src=image1.php?id=".$id['id']." align=center />";
       
}
}
else
{
echo mysql_error();
}
?>
  
  <ul class="button">
  <li> <a href="klhist.php" rel="external" data-role="button"><img src="images/icon/history.gif" width="25" height="20">Riyadh History</a></li>
  </ul>
  <ul class="button1">
   <li> <a href="map.html" rel="external" data-role="button"><img src="images/icon/map.png" width="25" height="20">Maps</a></li>
   </ul>
  <ul class="button2">
  <li> <a href="gallery.php" rel="external" data-role="button"><img src="images/icon/icon_gall.png" width="25" height="20">Gallery</a></li>
  </ul>
  <ul class="button3">
  <li> <a href="attraction.php" rel="external" data-role="button"><img src="images/icon/attract.png" width="25" height="20">Attractions</a></li>
  </ul>
  <ul class="button4">
  <li> <a href="hotel.html" rel="external" data-role="button"><img src="images/icon/hotel.png" width="25" height="20">Hotels</a></li>
  </ul>
<!--	<ul class="button5">
   <li> <a href="transport.html" rel="external" data-role="button"><img src="images/icon/transport.png" width="25" height="20">Transportation</a></li>
   </ul>-->
   <ul class="button6">
   <li><a href="info.html" rel="external" data-role="button"><img src="images/icon/info.png" width="25" height="20">Info</a></li>
   </ul>
   
  </div> 
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
   </div>
   </div>
 <!--end of home page -->
 
 




</body>
</html>
