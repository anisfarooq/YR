<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Riyadh History</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<!--<link href="css/themes/jomkl.css" rel="stylesheet" type="text/css">
<link href="css/themes/jomkl.min.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>-->

<link href="css/themes/yallaRiyadh2.css" rel="stylesheet" type="text/css">
<link href="css/themes/yallaRiyadh2.min.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

<!-- samsung -->
</head>

<body>
 
 <!--riyadh history page -->
 <div data-role="page" id="history" data-theme="a">
   <div data-role="header">
<a href="index.php" data-icon="arrow-l" rel="external">Back</a>
   
      
     <h1>Riyadh History</h1>
     
      <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
<!--        <li><a href="transport.html" rel="external">Transportation</a></li>-->
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>

</div>
     

   
   
   <div data-role="content" data theme="a">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;

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
$q = "SELECT * From HPP";
$r = mysql_query("$q",$conn);
if($r)
{
if($id=1)
{
echo "<img class='resize' src=image2.php?id=".$id['id']." align=center />";
       
}
}
else
{
echo mysql_error();
}
?>

  
   <p class="titlehotel">History of Riyadh</p>
     <p class="isihotel">In the midst of rolling golden sands an oasis emerged with gardens of date palms.  Riyadh, a name derived from the Arabic plural form of rowdah (gardens) was not always the capital, as previously the 500 year old walled city of Ad-Diriyah was the seat of the Al Saud tribe. In 1818, the old city was partially destroyed by the Turks which resulted in the government seat to moving to Riyadh.  The current city is located where several wadis or riverbeds join together on a sedimentary plateau about 600 meters above sea level.  Although the climate is very dry with little rainfall, there is a good supply of underground water which makes it one of the natural fertile areas within the Kingdom. The city of Riyadh is strategically located, not only centered between continents, but also on the Arabian Peninsula itself, providing traders and nomads a central post in their travels.
	 The Kingdom was brought together on the 15th Shawal 1319 in the Hejira calendar, when Abdulaziz Al Saud took over the Musmak fortress.  Since that day, the small town of Riyadh has undergone many changes and grown into a cosmopolitan city. As the needs of the city increased, the Riyadh Development Authority utilized a computerized urban intelligence system for mapping, planning and anticipating its growing demography. Currently Riyadh compromises more than 1782 km2 which is about the same as the land size of the state of Delaware, U.S.A., or three times the size of Singapore.  Its population continues to increase at a steady rate with a current (2008) population of about 5,900,000.</p>
   </div>
   <div data-role="footer">
     <h4>Copyright &copy; 2013</h4>
   </div>
 </div>
 <!--end of riyadh history page -->
 
 




</body>
</html>
