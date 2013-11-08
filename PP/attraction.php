<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Attraction</title>
 <link rel="stylesheet" href="css/bjqs.css">
                <link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<!--<link href="css/themes/jomkl.css" rel="stylesheet" type="text/css">
<link href="css/themes/jomkl.min.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>-->

<link href="css/themes/yallaRiyadh2.css" rel="stylesheet" type="text/css">
<link href="css/themes/yallaRiyadh2.min.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>

<!-- samsung -->

</head>

<body>
<!--This is attraction -->
 <div data-role="page" id="attraction" data-theme="a">
  <div data-role="header">
  <a href="index.php" data-icon="arrow-l" rel="external">Back</a>
    <h1>Attraction</h1>
      <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>


  </div>
  <div data-role="content"> <div id="container">
          <div id="banner-fade">
            <ul class="bjqs">
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
$q = "SELECT * From Galr5";
$r = mysql_query("$q",$conn);
if($r )
{
while($row=mysql_fetch_array($r))
{
echo "<li><img src=image4.php?id=".$row['id']."/></li>";
}
}
else
{
echo mysql_error();
}
?>
                      
            </ul>
           </div>
			  <script class="secret-source">
                jQuery(document).ready(function($) {
        
                  $('#banner-fade').bjqs({
                    height      : 480,
                    width       : 640,
                    responsive  : true,
					nexttext : '>', 
					prevtext : '<', 
                  });
        
                });
              </script>
        </div>
 
 <ul data-role="listview" data-inset="true">
        <li><a href="#cafe">Cafes</a></li>
        <li><a href="#food">Restaurants</a></li>
        <li><a href="#mall">Malls</a></li>
        <li><a href="#museum">Museums</a></li>
<!--        <li><a href="#nightlife">Nightlife</a></li>-->
        <li><a href="#park">Parks</a></li>
    </ul>
  
   
  </div> 
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
   </div>
   </div>
 <!--end of attraction -->
 
 <!--cafe-->
<div data-role="page" id="cafe" data-theme="a">
   <div data-role="header">
   <a href="#attraction" data-icon="arrow-l" rel="external">Back</a>
     <h1>Cafes</h1>
     
     <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>
   </div>
   
   <div data-role="content">
       
       
   <ul data-role="listview" data-inset="true">
       
         <li><a href="#illy">
            <img src="images/logo_att/caferoyal.jpg">
            <h2>Cafe Royal</h2>
            <p>Coffee Shop and Bakery</p></a>
        </li>
         <li><a href="#theloaf">
            <img src="images/logo_att/fourseasons.jpg">
            <h2>Four Seasons Hotel Tea Lounge</h2>
            <p>Coffee Shop and Bakery</p></a>
        </li>
        <li><a href="#dome">
            <img src="images/logo_att/cafevienna.jpg">
            <h2>Café Vienna – Radisson Hotel</h2>
            <p>Coffee Shop and Bakery</p></a>
        </li>
        <li><a href="#antipodean">
            <img src="images/logo_att/drcafe.jpg">
            <h2>dr. CAFE COFFEE</h2>
            <p>Coffee Shop</p></a>
      	</li>
        <li><a href="#artisan">
            <img src="images/logo_att/saad.jpg">
            <h2>Saad Uddin</h2>
            <p>Coffee Shop and Bakery</p></a>
		</li>
 <!--        <li><a href="#dipdip">
            <img src="images/logo_att/dip.jpg">
            <h2>Dip N Dip</h2>
            <p>Chocolate Cafe</p></a>
		</li>
         <li><a href="#raw">
        <img src="images/logo_att/raw.jpg">
        <h2>R.A.W. (Real and Wholesome)</h2>
        <p>Vegetarian Cafe</p></a>
    </li>-->
	</ul>
     
  </div>
</div>
 <div data-role="footer" data-position="fixed">
     <h4>Copyright &copy; 2013</h4>
   </div>
 </div>
 
 <!--cafe-->
 
  
<!--food-->
<div data-role="page" id="food" data-theme="a">
   <div data-role="header">
   <a href="#attraction" data-icon="arrow-l" rel="external">Back</a>
   
  
     <h1>Food</h1>
      <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    
    
    
    

	
	
</div>
     <div data-role="navbar">
      
        <ul>
            <li><a href="#food">Arabian</a></li>
            <li><a href="#foodwes">Western</a></li>
            
            
        </ul>
    </div>
   </div>
   
   
   <div data-role="content">
      
      
       
            <ul data-role="listview" data-inset="true">
    <li><a href="#jogoya">
        <img src="images/logo_att/najdiya.jpg">
        <h2>Al-Najdiyah Village</h2>
        <p>Saudi Restaurant</p></a>
    </li>
   <li><a href="#sushitei">
        <img src="images/logo_att/mamanoura.jpg">
        <h2>Mama Noura</h2>
        <p>Shawarma and Grill Restaurant</p></a>
    </li>
    
     <li><a href="#tamarind">
        <img src="images/logo_att/abdulwahab.jpg">
        <h2>AbdulWahab</h2>
        <p>Lebanese Restaurant</p></a>
    </li>
     <li><a href="#bijan">
        <img src="images/logo_att/setalsham.jpg">
        <h2>Set Al Sham</h2>
        <p>Middle Eastern Restaurant</p></a>
    </li>
  
</ul>
      
  </div>
   
   <div data-role="footer" data-position="fixed">
     <h4>Copyright 2013</h4>
   </div>
 </div>
 
 <!--food-->
 
  <!--foodwes-->
<div data-role="page" id="foodwes" data-theme="a">
   <div data-role="header">
   <a href="#attraction" data-icon="arrow-l" rel="external">Back</a>
     <h1>Food</h1>
     <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li><a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    
    
    
    

	
	
</div>
     <div data-role="navbar">
      
        <ul>
            <li><a href="#food">Arabian</a></li>
            <li><a href="#foodwes">Western</a></li>
            
            
        </ul>
    </div>
   </div>
   
     
   
   <div data-role="content">
      
      
       
            <ul data-role="listview" data-inset="true">
    <li><a href="#rils">
        <img src="images/logo_att/outback.jpg">
        <h2>Outback Steakhouse</h2>
        <p>Steakhouse</p></a>
    </li>
   <li><a href="#garibaldi">
        <img src="images/logo_att/assaraya.jpg">
        <h2>Assaraya Turkish Restaurant</h2>
        <p>Turkish Restaurant</p></a>
    </li>
     <li><a href="#mexicana">
        <img src="images/logo_att/lapiazza.jpg">
        <h2>La Piazza Restaurant</h2>
        <p>Italian Restaurant</p></a>
    </li>
    <li><a href="#terrace">
        <img src="images/logo_att/elchico.jpg">
        <h2>El Chico</h2>
        <p>Mexican Restaurant</p></a>
    </li>
    <li><a href="#larisata">
        <img src="images/logo_att/ilterrazzo.jpg">
        <h2>Il Terrazzo</h2>
        <p>Brazilian Restaurant</p></a>
    </li>
    <li><a href="#lavie">
        <img src="images/logo_att/labrasserie.jpg">
        <h2>La Brasserie</h2>
        <p>French Restaurant</p></a>
    </li>
  
</ul>
      
  </div>
   
   <div data-role="footer" data-position="fixed">
     <h4>Copyright 2013</h4>
   </div>
 </div>
 
 <!--foodwes-->
 
 <!--mall-->
<div data-role="page" id="mall" data-theme="a">
   <div data-role="header">
   <a href="#attraction" data-icon="arrow-l" rel="external">Back</a>
     <h1>Malls</h1>
     
     <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
 <!--       <li><a href="transport.html" rel="external">Transportation</a></li>-->
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>
   </div>
   
   <div data-role="content">
      
       
            <ul data-role="listview" data-inset="true">
    <li><a href="#pavi">
        <img src="images/logo_att/riyadhgallery.jpg">
        <h2>Riyadh Gallery</h2>
        <p>Shopping Mall</p></a>
    </li>
   <li><a href="#klcc">
        <img src="images/logo_att/granada.jpg">
        <h2>Granada Center</h2>
        <p>Shopping Mall</p></a>
    </li>
    <li><a href="#bukitbintang">
        <img src="images/logo_att/sahara.jpg">
        <h2>Sahara Mall</h2>
        <p>Shopping Mall</p></a>
	</li>
    <li><a href="#berjaya">
        <img src="images/logo_att/hayat.jpg">
        <h2>Hayat Mall</h2>
        <p>Shopping Mall</p></a>
    </li>
    <li><a href="#lot">
        <img src="images/logo_att/kingdom.jpg">
        <h2>Kingdom Mall</h2>
        <p>Shopping Mall</p></a>
    </li>
    <li><a href="#fahrenheit">
        <img src="images/logo_att/faisaliah.jpg">
        <h2>Faisaliah Mall</h2>
        <p>Shopping Mall</p></a>
    </li>
    <li><a href="#lowyat">
        <img src="images/logo_att/panorama.jpg">
        <h2>Panorama Mall</h2>
        <p>Shopping Mall</p></a>
    </li>
    <li><a href="#sungei">
        <img src="images/logo_att/localizer.jpg">
        <h2>Localizer Mall</h2>
        <p>Shopping Mall</p></a>
    </li>
    <li><a href="#starhill">
        <img src="images/logo_att/centria.jpg">
        <h2>La Centria Mall</h2>
        <p>Shopping Mall</p></a>
    </li>
  
</ul>
      
  </div>
   
   <div data-role="footer" data-position="fixed">
     <h4>Copyright 2013</h4>
   </div>
 </div>
 
 <!--mall-->
  
 <!--mus-->
<div data-role="page" id="museum" data-theme="a">
   <div data-role="header">
   <a href="#attraction" data-icon="arrow-l" rel="external">Back</a>
     <h1>Museums</h1>
     <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>
   </div>
   
   <div data-role="content">
      
       
            <ul data-role="listview" data-inset="true">
    <li><a href="#banknegara">
        <img src="images/logo_att/nationalmuseum.jpg">
        <h2>The National Museum</h2>
        <p> National Museum</p></a>
    </li>
   <li><a href="#musnegara">
        <img src="images/logo_att/murabba.jpg">
        <h2>The Murabba Palace</h2>
        <p>National Museum and Art Gallery</p></a>
    </li>
     <li><a href="#ktmmus">
        <img src="images/logo_att/folklore.jpg">
        <h2>The Museum of Antiquities and Folklore</h2>
        <p>Museum and Art Gallery</p></a>
    </li>
     <li><a href="#tmmus">
        <img src="images/logo_att/military.jpg">
        <h2>King Abdul-Aziz Military Museum</h2>
        <p>Military Museum</p></a>
    </li> 
     <li><a href="#islamic">
        <img src="images/logo_att/oasis.jpg">
        <h2>Oasis of Science</h2>
        <p>Science Museum</p></a>
    </li> 
  
  
</ul>
      
  </div>
   
   <div data-role="footer" data-position="fixed">
     <h4>Copyright 2013</h4>
   </div>
 </div>
 
 <!--mus-->
 
 <!--nl-->
<!--<div data-role="page" id="nightlife" data-theme="b">
   <div data-role="header">
   <a href="#attraction" data-icon="arrow-l" rel="external">Back</a>
     <h1>NightLife</h1>
     <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="b" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">KL History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attraction</a></li>
        <li><a href="hotel.html" rel="external">Hotel</a></li>
        <li><a href="transport.html" rel="external">Transportation</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>
   </div>
   
   <div data-role="content">
      
       
            <ul data-role="listview" data-inset="true">
    <li><a href="#zouk">
        <img src="images/logo_att/Zouk.jpg">
        <h2>Zouk Club Malaysia</h2>
        <p>Nightlife Club</p></a>
    </li>
   <li><a href="#vertigo">
        <img src="images/logo_att/vertigo.jpg">
        <h2>Vertigo Club KL</h2>
        <p>Nightlife Club</p></a>
    </li>
      <li><a href="#rootz">
        <img src="images/logo_att/rootz.jpg">
        <h2>Rootz Dance Club</h2>
        <p>Nightlife Club</p></a>
    </li>
      <li><a href="#alive">
        <img src="images/logo_att/alive.jpg">
        <h2>@LIVE</h2>
        <p>Nightlife Club</p></a>
    </li>
      <li><a href="#beach">
        <img src="images/logo_att/beach.jpg">
        <h2>Beach Club KL</h2>
        <p>Nightlife Club</p></a>
    </li>
      <li><a href="#butter">
        <img src="images/logo_att/butter.jpg">
        <h2>The Butter factory KL</h2>
        <p>Nightlife Club</p></a>
    </li>
      <li><a href="#heli">
        <img src="images/logo_att/heli.jpg">
        <h2>Helipad Lounge Bar</h2>
        <p>Outdoor Bar</p></a>
    </li>
      <li><a href="#pool">
        <img src="images/logo_att/pool.jpg">
        <h2>The Pool</h2>
        <p>Lifestyle lounge</p></a>
    </li>

  
</ul>
      
  </div>
   
   <div data-role="footer" data-position="fixed">
     <h4>Copyright 2013</h4>
   </div>
 </div>
 -->
 <!--nl-->

<!--park-->
<div data-role="page" id="park" data-theme="a">
   <div data-role="header">
   <a href="#attraction" data-icon="arrow-l" rel="external">Back</a>
     <h1>Parks</h1>
     <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext"></a>
     
        <div data-role="panel" id="mypanel" class="ui-responsive" data-theme="a" data-display="overlay" > 
	
    
    <ul data-role="listview" data-theme="a" data-inset="false">
        <a href="index.php"><img src ="images/title.gif" width="107" height="34"></a>
        <li><a href="klhist.php" rel="external">Riyadh History</a></li>
        <li><a href="map.html" rel="external">Maps</a></li>
        <li><a href="gallery.php" rel="external">Gallery</a></li>
        <li> <a href="attraction.php" rel="external" >Attractions</a></li>
        <li><a href="hotel.html" rel="external">Hotels</a></li>
        <li><a href="info.html" rel="external">Info</a></li>
    </ul>
    
    

	
	
</div>
   </div>
   
   <div data-role="content">
      
       
            <ul data-role="listview" data-inset="true">
    <li><a href="#aquaria">
        <img src="images/logo_att/salam.jpg">
        <h2>Salam Park</h2>
        <p>Lake Gardens</p></a>
    </li>
   <li><a href="#botanical">
        <img src="images/logo_att/nahdah.jpg">
        <h2>Al Nahdah Road Park</h2>
        <p>Road Park</p></a>
    </li>
    <li><a href="#klbird">
        <img src="images/logo_att/fouta.jpg">
        <h2>Al Fouta Park</h2>
        <p>Public Park</p></a>
    </li>
    <li><a href="#zoo">
        <img src="images/logo_att/abumakhrouq.jpg">
        <h2>Jabal Abu Makhrouq Park</h2>
        <p>Public Park</p></a>
    </li>
<!--    <li><a href="#themepark">
        <img src="images/logo_att/themepark.jpg">
        <h2>Time Square Theme Park</h2>
        <p>Indoor Theme Park</p></a>
    </li>
     <li><a href="#atv">
        <img src="images/logo_att/atv.jpg">
        <h2>ATV Adventure Park</h2>
        <p>Outdoor Adventure Park</p></a>
    </li>-->
  
  
</ul>
      
  </div>
   
   <div data-role="footer" data-position="fixed">
     <h4>Copyright 2013</h4>
   </div>
 </div>
 
 <!--park-->

<!--cafe-->
<div data-role="page" id="illy" data-theme="a">
  <div data-role="header" >
  <a href="#cafe" data-icon="arrow-l" rel="external">Back</a>
    <h1>Cafes</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Cafe Royal</p>
  <img class="resize" src="images/cont_att/caferoyal.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel"> 
  Take a break from all that sightseeing and enjoy a coffee and cake in sumptuous surroundings. This café is said to bring informal European luxury to the city of Riyadh, so if you’re feeling extravagant - drop in for a homemade pastry.
  
 </p>
  
  <p class="add">Al-Faisaliah Hotel, King Fahad Road, Olaya, Riyadh, Saudi Arabia</p>

  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="theloaf" data-theme="a">
  <div data-role="header" >
  <a href="#cafe" data-icon="arrow-l" rel="external">Back</a>
    <h1>Cafe</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Four Seasons Hotel Tea Lounge</p>
  <img class="resize" src="images/cont_att/hoteltealounge.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel"> The Lobby Lounge inside Four Seasons Hotel is the best place to sit back and enjoy a pot of freshly brewed tea and some Arabic sweets. They have an excellent selection of Cuban cigars.</p>
  <p class="add">Kingdom Center, King Fahad Road, Olaya, Riyadh, Saudi Arabia</p>

  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="dome" data-theme="a">
  <div data-role="header" >
  <a href="#cafe" data-icon="arrow-l" rel="external">Back</a>
    <h1>Cafe</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Café Vienna – Radisson Hotel</p>
  <img class="resize" src="images/cont_att/cafevienna.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel"> A popular café inside Radisson Blu Hotel, serving a wide selection of freshly baked cakes and excellent aromatic coffee. Located on the ground floor, this café is elegant yet relaxed and a perfect place to hang out with friends while enjoying light snacks and drinks.</p>
 
  <p class="add">Radisson Blu Hotel, Al Mubarakiah Plaza King Abdul Aziz Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="antipodean" data-theme="a">
  <div data-role="header" >
  <a href="#cafe" data-icon="arrow-l" rel="external">Back</a>
    <h1>Cafe</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">dr. CAFE COFFEE</p>
  <img class="resize" src="images/cont_att/drcafe.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">This international Saudi Arabian coffee chain serves exquisite coffee made from Arabica beans. The key points for Dr. Café are quality products and knowledgeable service.</p>
 
  <p class="add">Makkah Road, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="artisan" data-theme="a">
  <div data-role="header" >
  <a href="#cafe" data-icon="arrow-l" rel="external">Back</a>
    <h1>Cafe</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Saad Uddin</p>
  <img class="resize" src="images/cont_att/saad.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Saad Uddin is a famous sweet house with a wide selection of Arabic treats and aromatic coffee. They also serve western and oriental sweets as well as ice cream and mixed nuts.</p>
 
  <p class="add">Prince Sultan bin Abdul Aziz Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<!--<div data-role="page" id="dipdip" data-theme="a">
  <div data-role="header" >
  <a href="#cafe" data-icon="arrow-l" rel="external">Back</a>
    <h1>Cafe</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Dip N Dip</p>
  <img class="resize" src="images/cont_att/dipndip.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">dip ‘n dip is the heaven for all chocolate, sweets and coffee lovers from all ages, as dip ‘n dip is sort of a coffee shop that is specialized in chocolatesweets, chocolate dipped fruits and sweets, chocolate based hot and cold drinks in addition to top of the line coffee drinks and a variety of cold drinks. All offered to the clients in a very unique concept.


</p>
 
  <p class="add">
  Jalan Telawi, Bangsar,
59100 Kuala Lumpur, Malaysia. </p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>-->
<!--content-->

<!--content-->
<!--<div data-role="page" id="raw" data-theme="a">
  <div data-role="header" >
  <a href="#cafe" data-icon="arrow-l" rel="external">Back</a>
    <h1>Cafe</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">R.A.W (Real And Wholesome)</p>
  <img class="resize" src="images/cont_att/raw.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">Real and Wholesome (R.A.W.) is a whole new concept in dining in Malaysia. Wholly vegetarian and able to cater for vegan and raw diets, R.A.W. strives to focus on 

affordable health food in a comfortable setting.





Opening times: Mon-Fri, 7.30am-7.30pm; Sat, 9am-6pm


</p>
 
  <p class="add">
 Wisma Equity, 150 Jalan Ampang, KL. </p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>-->
<!--cafe-->

<!--food-->
<div data-role="page" id="jogoya" data-theme="a">
  <div data-role="header" >
  <a href="#food" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Arabian</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Al-Najdiyah Village</p>
  <img class="resize" src="images/cont_att/najdiya.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">The Najd Village is a must for any expat living or traveling through Riyadh. Najdi refers to the old Riyadh and can refer to a person, dialect or food. The Najd Village specializes in this old fashioned cuisine and has expats who want to experience a real Saudi meal as well as Saudis who just adore the food. The restaurant has several locations throughout Riyadh with each being housed in a traditional mud house.
As soon as you enter the mud house you will be able to look around at all the antiques that adorn the wall such as dullahs, pictures and cooking utensils.</p>
 
  <p class="add">Abu Baker Al Siddiq Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="sushitei" data-theme="a">
  <div data-role="header" >
  <a href="#food" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Arabian</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Mama Noura</p>
  <img class="resize" src="images/cont_att/mamanoura.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Mama Noura is a Casual Dining Restaurant Serving Shawarma, Grill with a branch located in Riyadh Saudi Arabia.</p>
 
  <p class="add">Dabab Street, Suleimania, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="tamarind" data-theme="a">
  <div data-role="header" >
  <a href="#food" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Arabian</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">AbdulWahab</p>
  <img class="resize" src="images/cont_att/abdulwahab.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">One of Riyadhs more popular lebanese restaurants, and just like in Beirut Abdulwahab has a great selection of mixed grill items, along with a great value for money buffet each weekend. The family section does get busy, so you may want to reserve a table.</p>
 
  <p class="add">Tahliya Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->
<!--content-->
<div data-role="page" id="garibaldi" data-theme="a">
  <div data-role="header" >
  <a href="#foodwes" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Western</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Assaraya Turkish Restaurant</p>
  <img class="resize" src="images/cont_att/saraya.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">It looks nice on the outside with its green and yellow sign and see-through glass walls in the men’s area where the chicken is being grilled in rotating vertical spits, but it’s still just a shawarma place.</p>
 
  <p class="add">Thalateen Street, Olaya, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="bijan" data-theme="a">
  <div data-role="header" >
  <a href="#food" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Arabian</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Set Al Sham</p>
  <img class="resize" src="images/cont_att/setelsham.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Set Al Sham Riyadh is a Middle-Eastern restaurant serving a buffet of different Arabic foods. For those not familiar with the Middle Eastern cuisine this is your perfect chance to sample through different dishes.
This restaurant has complete dining privacy for those looking for a secluded setting or an option to dine in the open area around a Syrian style fountain.</p>
 
  <p class="add">Thalateen Street, Olaya, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="rils" data-theme="a">
  <div data-role="header" >
  <a href="#foodwes" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food Western</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Outback Steakhouse</p>
  <img class="resize" src="images/cont_att/outback.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Outback Steakhouse is an Australian themed steakhouse restaurant. Although beef and steak items make up a good portion of the menu, the concept offers a variety of chicken, ribs, seafood, and pasta dishes. The Company’s strategy is to differentiate its restaurants by emphasizing consistently high-quality food and service, generous portions at moderate prices and a casual atmosphere suggestive of the Australian Outback.</p>
 
  <p class="add">Localizer Mall, Tahliah Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--content-->

<!--content-->
<div data-role="page" id="mexicana" data-theme="a">
  <div data-role="header" >
  <a href="#foodwes" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Western</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">La Piazza Restaurant</p>
  <img class="resize" src="images/cont_att/lapiazza.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Rated as the number one restaurant in Riyadh according to Trip Advisor, La Piazza certainly has managed to maintain it’s high standard at the Sheraton Riyadh, Great selection of Pizzas, Pasta and traditional Italian dishes.  Inspired by the Italian village square of “Piazza dell’Orologio”, La Piazza offers a sophisticated dining experience with a traditional taste of a real Italian cuisine. Its ambience is complemented with terrazzo tiles, clock tower, house fronts looking onto the square, and twinkling stars in a pitch black sky.</p>
 
  <p class="add">Sheraton Hotel, King Abdullah Road, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--food-->

<!--content-->
<!--<div data-role="page" id="terrace" data-theme="a">
  <div data-role="header" >
  <a href="#foodwes" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Western</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">El Chico</p>
  <img class="resize" src="images/cont_att/elchico.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">The menu is very extensive and offers exactly what you would expect from a Tex Mex place, with the exception of Alcoholic beverages and pork dishes, of course! Even the chips and salsa were delicious and are directly imported from the US. The iced tea were served in large tall glasses with ice filled to the top and Sweet and Low and simple syrup on the side, never encountered experience in Riyadh. We almost felt back in Louisiana, enjoying dinner with the friends.</p>
 
  <p class="add">Tahlia Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>-->
<!--food-->

<!--content-->
<div data-role="page" id="terrace" data-theme="a">
  <div data-role="header" >
  <a href="#foodwes" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Western</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">El Chico</p>
  <img class="resize" src="images/cont_att/elchico.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">The menu is very extensive and offers exactly what you would expect from a Tex Mex place, with the exception of Alcoholic beverages and pork dishes, of course! Even the chips and salsa were delicious and are directly imported from the US. The iced tea were served in large tall glasses with ice filled to the top and Sweet and Low and simple syrup on the side, never encountered experience in Riyadh. We almost felt back in Louisiana, enjoying dinner with the friends.</p>
 
  <p class="add">Tahlia Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--food-->

<!--content-->
<div data-role="page" id="larisata" data-theme="a">
  <div data-role="header" >
  <a href="#foodwes" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Western</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Il Terrazzo</p>
  <img class="resize" src="images/cont_att/ilterrazzo.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Overlooking Al Faisaliah Center’s beautifully landscaped plaza, the mist-cooled IL Terrazzo restaurant serves Brazilian barbeque prepared in accordance to a 300-year-old South American tradition. Guests select from a variety of succulent meats seasoned and slow-roasted to perfection over an open, wood-burning fire and a delightful fresh salad bar. A dining experience sure to please both visitors to Saudi Arabia and residents of Riyadh alike!</p>
 
  <p class="add">Al Faisaliah Hotel - North, 1st Floor, Olaya, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--food-->

<!--content-->
<div data-role="page" id="lavie" data-theme="a">
  <div data-role="header" >
  <a href="#foodwes" data-icon="arrow-l" rel="external">Back</a>
    <h1>Food: Western</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">La Brasserie</p>
  <img class="resize" src="images/cont_att/labrasserie.jpg">
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">In an atmosphere inspired by world-class chefs and the passion and style of brasserie cuisine, guests enjoy a feast of international fusion with the freshest seasonal ingredients and superior levels of service. The restaurant is open for breakfast, lunch and dinner.</p>
 
  <p class="add">Al Faisaliah Hotel - North, Lobby level, Olaya, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
<!--food-->

<!--nightlife-->
<!--<div data-role="page" id="zouk" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Zouk Club Malaysia</p>
  <img class="resize" src="images/cont_att/zouk.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
The best clubbing scene in Kuala Lumpur, divided into clubs & bars under one roof, located at the heart of Kuala Lumpur city within the ‘Golden Triangle’. You might want to read about the 101 things to do in KL. Music type : EDM, Trance, RNB, Hip Hop, House

</p>
 
  <p class="add">
113 Jalan Ampang
Kuala Lumpur, Federal Territory of Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>-->
<!--nightlife-->

<!--nightlife-->
<!--<div data-role="page" id="vertigo" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Vertigo Club KL</p>
  <img class="resize" src="images/cont_att/vertigo.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
Vertigo looks to bring new heights to KL’s nightlife scene. This sister of ultra-exclusive Filter in Singapore certainly has a rarefied location on the rooftop of The Gardens at Mid Valley City. There are two distinct rooms, Nero which offers and LED Lit dance floor and a pool-front bar. Bianco promises international acts and an upscale lounge vibe. Both look to bring partygoers champagne nights, themed parties, DVJ sets, visual installations and more.  Music type : Trance, Electro, EDM, House, RNB, Hip Hop

</p>
 
  <p class="add">
Rooftop (6th Floor), The Gardens, Mid Valley City, 59200</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
-->
<!--nightlife-->
<!--<div data-role="page" id="rootz" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Rootz Club KL</p>
  <img class="resize" src="images/cont_att/rootz.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
Rootz is one of the club venue and to be new pulse of the city for celebrities & clubbers hangout. Rootz Dance Club inspired with the architecture of great Russian museums and imperial palaces.
 Music type : RNB, Hip Hop, House

</p>
 
  <p class="add">
Rooftop, Lot 10 Shopping Centre 50 Jalan Sultan Ismail  50250 Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>
-->
<!--nightlife-->
<!--<div data-role="page" id="alive" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">@LIVE</p>
  <img class="resize" src="images/cont_att/alive.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
You can pronounce it ‘at live’ or ‘alive’ and it’s come to us inspired by the Taiwanese musical and cultural scene. A combination of traditional and modern designs with a splash of inspiration from the Izakaya bars of Japan, it’s decorated with contemporary furniture over wooden floorings. Sit at the terrace or the bar if the loud music and the crazy lights in the live room dull your senses. But if you’re into Cantopop, Korean music and Taiwanese covers, by all means join in.Music type : J-Pop, K-Pop, Dance Music, Live Performance

</p>
 
  <p class="add">
@LIVE KL, Federal Arcade, Annex Federal Hotel, Jalan Bukit Bintang, KL</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
</div>-->
<!--nightlife-->

<!--nightlife-->
<!--<div data-role="page" id="beach" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Beach Club</p>
  <img class="resize" src="images/cont_att/beach.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
The Beach Club Cafe is designed to give it a whole Hawaiian and tropical touch with its attap roof and timber finishing. Reminiscent of a beachside island bar, it holds everything from a rattan chairs and wooden tables. Beach Club Cafe brings about a breezy and warm ambiance,making it the perfect place to be if you are looking for somewhere to sit back and relax after an exhausting day. Once at the beach club, you will not be able to miss the sharks in the long fish tank over the bar. 
</p>
 
  <p class="add">
97 Jalan P Ramlee  50250 Kuala Lumpur, Federal Territory of Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
  <!--nightlife-->
  
  <!--nightlife-->
<!--<div data-role="page" id="butter" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">The Butter Factory KL</p>
  <img class="resize" src="images/cont_att/butter.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
The Butter Factory KL nightclub opens its door on 24th August 2012 for clubbers of Kuala Lumpur, Malaysia after attainment of popularity in Singapore. The Butter Factory is quite famous for creative and unpredictable theme parties which serve intermix of Hip Hop, R&B and Electronic Dance Music. Butter Factory KL located in Jalan Kia Peng, Golden triangle, the most premier location of Kuala Lumpur. 
Music type : Dance Music, EDM
</p>
 
  <p class="add">
1 Jalan Kia Peng  50450 Kuala Lumpur, Federal Territory of Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
<!--nighlife-->

 <!--nightlife-->
<!--<div data-role="page" id="heli" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Helipad Lounge Bar</p>
  <img class="resize" src="images/cont_att/heli.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
The layout at Heli Lounge Bar is uncomplicated with a lounge downstairs and bar on the rooftop: two flights of stairs from the lounge on the 34th floor leads up to the 36th floor rooftop stunner. There are no rails, no walls and no boundaries of any kind to stop you from going over the side of this wide open space so be sure to stay far away from the edge

</p>
 
  <p class="add">
34th Floor, Menara KH, Jalan Sultan Ismail, KL </p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
<!--nighlife-->

<!--nightlife-->
<!--<div data-role="page" id="pool" data-theme="a">
  <div data-role="header" >
  <a href="#nightlife" data-icon="arrow-l" rel="external">Back</a>
    <h1>Nightlife</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">The Pool</p>
  <img class="resize" src="images/cont_att/pool.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
 The Pool is the place to unwind after a long day and cool yourself with a little dip. Indulged by a stylish and luxurious ambiance guests can enjoy well-conceived Japanese and western dishes, the most original cocktails and more than 10 international beers on tap. Swing by for dinner, a drink or let your hair down at the best pool parties in town!
</p>
 
  <p class="add">
347 Jalan Ampang
50400 Kuala Lumpur </p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
<!--nighlife-->

<!--Museum-->
<div data-role="page" id="banknegara" data-theme="a">
  <div data-role="header" >
  <a href="#museum" data-icon="arrow-l" rel="external">Back</a>
    <h1>Museum</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">The National Museum</p>
  <img class="resize" src="images/cont_att/nationalmuseum.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Features exhibits that focus on geology, religion, culture, archeology, and Islamic architecture. Price of admission is SR 15. The museum is open 9 a.m. to 12 p.m. (men only) and 4:30 p.m. to 9 p.m. (families) Sunday through Thursday and Friday evenings.</p>
 
  <p class="add">King Abdul Aziz, Historical Center, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--museum-->

<!--Museum-->
<div data-role="page" id="musnegara" data-theme="a">
  <div data-role="header" >
  <a href="#museum" data-icon="arrow-l" rel="external">Back</a>
    <h1>Museum</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">The Murabba Palace</p>
  <img class="resize" src="images/cont_att/murabba.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">A two-story palace built by King Abdul Aziz as a private accommodation and work place. Located on Al-Malek Faisal Street, the palace is open Sunday, Monday, and Wednesday 9 a.m. to 12 p.m. and Tuesday 2 p.m. to 9 p.m. (men only), and every day but Tuesday, 2 p.m. to 9 p.m. for families. Founded by King Abdul-Aziz outside the walls of old Riyadh for his private accommodation and to his works in the evenings.</p>
 
  <p class="add">Khazzan Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--museum-->

<!--Museum-->
<div data-role="page" id="ktmmus" data-theme="a">
  <div data-role="header" >
  <a href="#museum" data-icon="arrow-l" rel="external">Back</a>
    <h1>Museum</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">The Museum of Antiquities and Folklore</p>
  <img class="resize" src="images/cont_att/folklore.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Includes a number of ethnological items including clothing, weapons, clay and ceramic utensils, and rare stamps. The museum is open to men Sunday 8 a.m. to 2 p.m., Monday 8 a.m. to 2 p.m., Tuesday 4:30 p.m. to 9 p.m., and Wednesday 8 a.m. to 2 p.m. Family admission is Sunday 10 a.m. to 12 p.m., Monday 4:30 p.m. to 9 p.m., and Wednesday, Thursday, and Friday 4:30 p.m. to 9 p.m.</p>
 
  <p class="add">King Saud Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--museum-->

<!--Museum-->
<div data-role="page" id="tmmus" data-theme="a">
  <div data-role="header" >
  <a href="#museum" data-icon="arrow-l" rel="external">Back</a>
    <h1>Museum</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">King Abdul-Aziz Military Museum</p>
  <img class="resize" src="images/cont_att/militarymuseum.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">A military museum affiliated to Ministry of Defense and Aviation.  The museum is presenting inclusive presentation for all war weapons and equipment’s as well as showing the development of military uniforms of college students.  Also showing historical presentation of Saudi Forces development.</p>
 
  <p class="add">Salboukh Road, Ministry of Defence, Land Forces, King Abdul Aziz Military College, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--museum-->

<!--Museum-->
<div data-role="page" id="islamic" data-theme="a">
  <div data-role="header" >
  <a href="#museum" data-icon="arrow-l" rel="external">Back</a>
    <h1>Museum</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Oasis of Science</p>
  <img class="resize" src="images/cont_att/scienceoasis.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">It was found by ArRiyadh Development Authority.  It contains more than fifty scientific articles distributed over many specialized wings.  These articles deal with different fields of sciences such as astronomy, optics, energy, physics, dynamics, and computer, in addition to some contributions and educational aids activities such as lectures, scientific trips, and others.</p>
 
  <p class="add">Diplomatic Quarters, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--museum-->

<!--park-->
<div data-role="page" id="aquaria" data-theme="a">
  <div data-role="header" >
  <a href="#park" data-icon="arrow-l" rel="external">Back</a>
    <h1>Park</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Salam Park</p>
  <img class="resize" src="images/cont_att/salampark.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Salam Park represents one of the natural elements for Riyadh City Center in Qasr Al Hokm area (Rule Palace), heart of Riyadh and its historical and heritage center that witnessed the start of March to the foundation of the modern Saudi State. This area is accommodating the mosque of Imam Turki bin Abdullah, Rule Palace and Masmak Fortress, as well as being an important Commercial Center.</p>
 
  <p class="add">Salam, Ad Dubiyah, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--park-->

<!--park-->
<div data-role="page" id="botanical" data-theme="a">
  <div data-role="header" >
  <a href="#park" data-icon="arrow-l" rel="external">Back</a>
    <h1>Park</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Al Nahdah Road Park</p>
  <img class="resize" src="images/cont_att/nahdah.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Nahdah Road Park is unique of its type in Riyadh city.  It extends as a Middle Island for 3 kilometers. There is a pass way specified for walking sports and jogging which is covered by small boundaries, specified places for bicycle sports, skiing, kid games, as well as handicapped special games. There are green areas, palms, four service lobbies, in addition to volleyball, basketball and tennis grounds.</p>
 
  <p class="add">Khurais Road, Gulf Bridge, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--park-->

<!--park-->
<div data-role="page" id="klbird" data-theme="a">
  <div data-role="header" >
  <a href="#park" data-icon="arrow-l" rel="external">Back</a>
    <h1>Park</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Al Fouta Park</p>
  <img class="resize" src="images/cont_att/fouta.jpeg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">There are big shady trees, green flat wide areas with straight pass ways. The park is tidy and neat with various species of trees, shrubs, and annual permanent flowers. There is a café shop, water closet for males and females and kids play grounds.</p>
 
  <p class="add">Imam Faisal bin Turki Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--park-->


<!--park-->
<div data-role="page" id="zoo" data-theme="a">
  <div data-role="header" >
  <a href="#park" data-icon="arrow-l" rel="external">Back</a>
    <h1>Park</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Jabal Abu Makhrouq Park</p>
  <img class="resize" src="images/cont_att/makhroug.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Jabal Abu Makhrouq Park over looks Salahuddin Road in Malaz Quarter. Its area is 40,000 square-meters. This mountain might have been formed of sedimentary rocks on graded levels during ancient times. There is a crevice on the top that evokes contemplation in God creation. This mountain has acquired historical importance whereas King Abdul-Aziz has made of it a surveillance point to keep an eye on Riyadh during 1319H.</p>
 
  <p class="add">Salahuddin Road, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
<!--park-->

<!--park-->
<!--<div data-role="page" id="themepark" data-theme="a">
  <div data-role="header" >
  <a href="#park" data-icon="arrow-l" rel="external">Back</a>
    <h1>Park</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Times Square Theme Park</p>
  <img class="resize" src="images/cont_att/themepark.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
The gigantic indoor theme park, measuring 133,000 square feet, offers thrilling rides and activities for your family and friends. Berjaya Times Square Theme Park is 

located in Berjaya Times Square Kuala Lumpur - Malaysiaís largest inner-city shopping-cum leisure mall.



Built by the fictitious mad scientist Professor Cosmo and his clumsy robot assistant, Ooort, you will find yourself transported to another galaxy far, far away as you 

explore 133,000 square feet of un and exhilaration.



Galaxy Station, specifically targeted at adults and teenagers, offers 6 rides for thrill-seekers especially with its heart-stopping roller coaster, Supersonic Odyssey,

 while Fantasy Garden makes great wholesome family bonding session, thanks to the 8 fun rides amidst the beautiful scenery and colourful Garden Avenue.
</p>
 
  <p class="add">
No. 09-103, 9th Floor, Berjaya Times Square, No.1, Jalan Imbi,

55100 Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
<!--park-->

<!--park-->
<!--<div data-role="page" id="atv" data-theme="a">
  <div data-role="header" >
  <a href="#park" data-icon="arrow-l" rel="external">Back</a>
    <h1>Park</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">ATV Adventure Park</p>
  <img class="resize" src="images/cont_att/atv.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
ATV Fun Adventure Marketing is incorporated on 24th July 2006 by En. Mas Fadzillah Khan bin Ali.  Having more than 20 years motoring experience, set up the ougn tourists, increased to 36 units in early 2009.  Located in the heart of the city at Kg. Kemensah, Hulu Kelang, Kuala Lumpur, ATV Adventure Park, the largest of its kind in Malaysia, offer various jungle trails for outdoor enthusiasts and all-terrain riders.  ATV Fun Adventure Marketing is an AP Holder and sole distributor in Malaysia for ATV E-ton models from Taiwan.

ATV Fun Adventure Marketing was given the recognition by Malaysian Tourism Promotion Board and Selangor Tourism Action Council as prospect icon in Eco-Tourism Malaysia.
</p>
 
  <p class="add">
Jalan Taman Zooview, Kampung Kemensah, Behind Zoo Negara, Hulu Kelang, 68000 Ampang, Selangor Darul Ehsan </p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
<!--park-->

<!--mall-->
<div data-role="page" id="pavi" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Riyadh Gallery</p>
  <img class="resize" src="images/cont_att/riyadhgallery.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Riyadh Gallery is located in a strategic place. It occupies an area of 130.000 m2. Panoramic Design, streamlined Movement inside and outside the compound, in addition to harmonized mix of international trade marks, make Riyadh Gallery one of the best shopping malls in Riyadh. The ground floor contains everything that a family needs such as clothes, shoes, jewelry, watches and so on. It also includes 2 supermarkets in 2500 m2 per store as well as 4 Mega stores each of them occupies an area of 900 m2. The first floor includes hyper panda which occupies an area of 18,000 m2. The second floor includes a large area for restaurants in addition to the Games City.</p>
 
  <p class="add">Olaya Street, King Fahad, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
<!--mall-->
<div data-role="page" id="klcc" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Granada Center</p>
  <img class="resize" src="images/cont_att/granada.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Occupying an area of 460 thousand square meters, Granada center is considered as one of the largest shopping centers in Riyadh. It offers a parking garage that can include more than four thousand cars. It also features more than 230 different stores, a hypermarket and more than 33 coffee shops and fast food restaurants. It has 16 entrance gates from different sides.</p>
 
  <p class="add">Ghirnatah, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 <!--mall-->
<div data-role="page" id="bukitbintang" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Sahara Mall</p>
  <img class="resize" src="images/cont_att/sahara.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">This mall is located at King Fahad district, at the intersection of King Abdulaziz Rd. and King Abdullah Rd. It is an indoor air-conditioned building which houses about 200 shops, including supermarkets and stores for clothing, shoes, perfumes, accessories, gold and jewelry, watches, cosmetics, gifts, spectacles, suitcases and bags, as well as home supplies. It also has a children's entertainment center, a collection of famous restaurants, and underground and outdoor parking area. This center offers all shopping needs of the family.</p>
 
  <p class="add">King Abdul Aziz Road, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 
 <!--mall-->
<div data-role="page" id="berjaya" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Hayat Mall</p>
  <img class="resize" src="images/cont_att/hayatmall.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Located in a highly populated area that witnesses a huge commercial and architectural development, Hayat Mall occupies an area of 142,000 square meters (built up area) and 91,000 square meters (leasable area) that provide a full range of shopping and entertainment. Hayat Mall is a home to over 400 retailers. Their Main attractions are: - Danube Hypermarket (20,000 square meters). - Best Electronic store. - Al Sawani. - Paris Gallery. - Jarir Bookstore. - A modern styled food court.</p>
 
  <p class="add">King Abdul Aziz Road, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 
 <!--mall-->
<div data-role="page" id="lot" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Kingdom Mall</p>
  <img class="resize" src="images/cont_att/kingdommall.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">This center is a total of 100,000 square meters, housing about 190 stores, most of them offering international brands. The food court has about 16 restaurants, and the center has enough underground parking for 3000 cars. Offices lie in a tower, as does a Four Seasons Hotel. A 300 meter high bridge allows one to view the whole city of Riyadh.</p>
 
  <p class="add">Al Olaya, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 
 <!--mall-->
<div data-role="page" id="fahrenheit" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Faisaliah Mall</p>
  <img class="resize" src="images/cont_att/faisaliah.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">It is one of the Kingdom's most popular retail destinations thanks to a combination of highly desirable brands and a relaxing, convenien??y accessible shopping environment. The center houses about 117 stores, most of them offering international brands. A food court and underground parking are available.</p>
 
  <p class="add">King Fahad Street, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 
 <!--mall-->
<div data-role="page" id="lowyat" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Panorama Mall</p>
  <img class="resize" src="images/cont_att/panorama.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">The Mall was constructed according to the latest international architectural specifications and standards. It is characterized by its location at the crossroads of Takhassusi Street and Tahlia Street. The mall includes 193 carefully chosen commercial and service shops whose activities and services cover all what the shoppers need. It features a parking area that can accomdate 2,080 cars. There are also a hypermarket, an amusement park and various restaurants complex.</p>
 
  <p class="add">At Takhassusi Street, Al Madhar Ash Shamali, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 
 <!--mall-->
<div data-role="page" id="sungei" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Localizer Mall</p>
  <img class="resize" src="images/cont_att/localizer.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Localizer Mall consists of commercial offices and outlets, specializing in footwear, watches, perfumes, children's garments and electronic items.</p>
 
  <p class="add">Awis Az Zahid, Sulaimaniyah, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 
  <!--mall-->
<div data-role="page" id="starhill" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">La Centria Mall</p>
  <img class="resize" src="images/cont_att/centria.jpg" >
  
  
 <p class="review"> Review: </p>


  <p class="isihotel">Bringing most of the world designers under one roof while providing the ultimate and most exquisite luxurious shopping experience, for the elite who are the local fashion trend setters, by representing the premium international fashion and retail brands. Delivering the finest level of service to our customers. Providing an unparalleled fine-dining experience with diverse and unique cuisines. Becoming the ultimate shopping destination for discerning clientele in the Kingdom.</p>
 
  <p class="add">Olaya Street, Al Olaya, Riyadh, Saudi Arabia</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>
 <!--mall-->
 
   <!--mall-->
<!--<div data-role="page" id="sungei" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Sungei Wang Plaza</p>
  <img class="resize" src="images/cont_att/sungei.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
Sungei Wang Plaza is a popular shopping centre and has win for Kuala Lumpur Mayor's Tourism Awards 2011 Award for Excellence Shopping Mall Category .
</p>
 
  <p class="add">
Jalan Bukit Bintang, 55100 Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
 <!--mall-->

   <!--mall-->
<!--<div data-role="page" id="starhill" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Starhill Gallery</p>
  <img class="resize" src="images/cont_att/star.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
Starhill Gallery is a luxury retail mall located in the Bukit Bintang shopping district of Kuala Lumpur. The mall opened in 1996 as Starhill Shopping Centre. In 1999, when business was in 

decline, it was acquired by YTL Corporation.[1] YTL decided to do away with the anchor tenant-based business model and transform Starhill into a luxury brand retail centre.
</p>
 
  <p class="add">
Jalan Bukit Bintang, 55100 Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
 <!--mall-->
 
    <!--mall-->
<!--<div data-role="page" id="bukitbintang" data-theme="a">
  <div data-role="header" >
  <a href="#mall" data-icon="arrow-l" rel="external">Back</a>
    <h1>Mall</h1>
  </div>
  
  
  <div data-role="content">
  
  
  <p class="titlehotel">Bukit Bintang Plaza</p>
  <img class="resize" src="images/cont_att/bb.jpg" >
  
  
 <p class="review"> Review : </p>


  <p class="isihotel">
Over here, you will be able to get a good bargain for electronics items, especially handphones and other mobile accessories. In addition, there are a large number of restaurants and cafes 

where you can replenish your energy after all the bargainings.</p>
 
  <p class="add">
111,Jalan Bukit Bintang, 55100 Kuala Lumpur</p>
  
  </div>
  
  
  <div data-role="footer" data-position="fixed">
    <h4>Copyright &copy; 2013</h4>
  </div>
  </div>-->
 <!--mall-->




</body>
</html>
