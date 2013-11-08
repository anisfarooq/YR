<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<meta name="author" content="annisa laksmi paramitha" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
	<!--<link rel="stylesheet" href="css/themes/jomkl.css"/>-->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" />
<!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>-->
<link href="css/themes/yallaRiyadh2.css" rel="stylesheet" type="text/css">
<link href="css/themes/yallaRiyadh2.min.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	<link href="css/photoswipe.css" type="text/css" rel="stylesheet" />
	
	<script type="text/javascript" src="lib/klass.min.js"></script>
	<script type="text/javascript" src="js/code.photoswipe-3.0.5.min.js"></script>
	
	
	<script type="text/javascript">

		(function(window, PhotoSwipe){
		
			document.addEventListener('DOMContentLoaded', function(){
			
				var
					options = {},
					instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
			
			}, false);
			
			
		}(window, window.Code.PhotoSwipe));
		
	</script>
	
</head>
<body>
<div data-role="page" id="gallery" data-theme="a">



<div data-role="header">
<a href="index.php" data-icon="arrow-l" rel="external">Back</a>
    <h1>Gallery</h1>
<!--    <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="b" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">KL History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attraction</a></li>
        <li><a href="hotel.html" rel="external">Hotel</a></li>
        <li><a href="transportation.html" rel="external">Transportation</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>-->
  </div>

<div id="MainContent">

	<div class="page-content">
		
	</div>
	
	<ul id="Gallery" class="gallery">
		
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
$q = "SELECT * From galr2";
$r = mysql_query("$q",$conn);
if($r )
{
while($row=mysql_fetch_array($r))
{
echo "<li><a href=image3.php?id=".$row['id']."><img src=image.php?id=".$row['id']."/></a></li>";
}
}
else
{
echo mysql_error();
}
?>
		
	</ul>
	
</div>	

	
<div data-role="footer" data-position="fixed">
     <h4>Copyright 2013</h4>
   </div>
</div>

</body>
</html>
