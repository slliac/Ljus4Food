<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Restaurant Offered by Zomato API</title>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet prefetch' href='https://unpkg.com/vuetify/dist/vuetify.min.css'>
 <link rel="stylesheet" href="../../css/style.css">
    <script src='https://unpkg.com/vue/dist/vue.js'></script>
    <script src='https://unpkg.com/vuetify@1.0.16/dist/vuetify.min.js'></script>
  
</head>

<body>


<?php

$_SESSION["address"] = $address;
$_SESSION["latitude"] = $latitude;
$_SESSION["longitude"]= $longitude;
$_SESSION["placename"] = $placename;
$_SESSION["rating"] = $rating;
$_SESSION["outlook"] = $outlook;

?>


<div id="map" style="width:100%;height:500px"></div>

<script>

      <?php
      
      $long_array = array();
      $lat_array  = array();
      $place_array = array();
      $addr_array = array();
      foreach ($latitude   as  $lati  ):
        array_push($lat_array,(string)$lati);
      endforeach;
      
      foreach ($longitude   as  $long  ):
        array_push($long_array,(string)$long);
      endforeach;

      foreach ($placename   as  $place  ):
        array_push($place_array,(string)$place);
      endforeach;

      foreach ($address   as  $addr  ):
        array_push($addr_array,(string)$addr);
      endforeach;


      ?>
var placeArr = <?php echo json_encode($place_array, JSON_PRETTY_PRINT) ?>;     
var lat = <?php echo json_encode($lat_array, JSON_PRETTY_PRINT) ?>;
var lon = <?php echo json_encode($long_array, JSON_PRETTY_PRINT) ?>;
var AddArr = <?php echo json_encode($addr_array, JSON_PRETTY_PRINT) ?>; 
//alert(book.lat);

var brutelat = JSON.parse(JSON.stringify(lat) );
var brutelon = JSON.parse(JSON.stringify(lon) );


function myMap() {
  var myCenter = new google.maps.LatLng(parseFloat(lat[0]),parseFloat(lon[0]));
  var myCenter2 = new google.maps.LatLng(parseFloat(lat[1]),parseFloat(lon[1]));
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 10};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  var marker2 = new google.maps.Marker({position:myCenter2});
  marker.setMap(map);
  marker2.setMap(map);
  google.maps.event.addListener(marker,'click',function() {
    var infowindow = new google.maps.InfoWindow({
      content: placeArr[0]+', Address : '+AddArr[0]
    });
  infowindow.open(map,marker);
  });
  google.maps.event.addListener(marker2,'click',function() {
    var infowindow = new google.maps.InfoWindow({
      content: placeArr[1]+', Address : '+AddArr[1]
    });
  infowindow.open(map,marker2);
  });

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzlLYISGjL_ovJwAehh6ydhB56fCCpPQw&callback=myMap"></script>

  <div id="root">


  </div>


<div id="app">
  <v-app id="inspire">

                        <v-card>
                          <v-toolbar dark color="amber">
                              <v-btn color="white" outline href="https://ljus4food.herokuapp.com/index.php/welcome/index/"> < Home</v-btn>
                            <v-toolbar-title>Related restaurant searched by Zomato API</v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-toolbar-items>
                            </v-toolbar-items>
                          </v-toolbar>
                          </v-card>



                          <v-list three-line subheader>
                            <v-subheader><i class="material-icons">local_bar</i> Promotion offered from us</v-subheader>


<?php    
/**
 *  make view data that presented in the javascript
 * 
 */
$address_array = array();
$long_array = array();
$lat_array  = array();
$place_array = array();
$rate_array = array();

foreach ($latitude   as  $lati  ):
  array_push($lat_array,(string)$lati);
endforeach;

foreach ($longitude   as  $long  ):
  array_push($long_array,(string)$long);
endforeach;

foreach ($placename   as  $place  ):
  array_push($place_array,(string)$place);
endforeach;

foreach( $address    as    $add   ):
  array_push($address_array,(string)$add);
endforeach;

foreach ($rating as $rate):
  array_push($rate_array,(string)$rate);
endforeach;

//var_dump($address_array);

 function card_printing($myMarkupTemplate,$address_array,$place_array,$rate_array){
  /**
   * 
   * more elegant method for represent datum from View to controller
   */
  for($i = 0 ; $i < count($address_array) ; $i++) {
    $search = array('[_PLACE_]', '[_ADDRESS_]', '[_RATING_]'); 
    $replace = array($place_array[$i], $address_array[$i], $rate_array[$i]);
    echo str_replace($search, $replace, $myMarkupTemplate);
  }
  }

$myMarkupTemplate = '<v-card>
<v-list-tile avatar><v-list-tile-content>
<v-list-tile-sub-title><i class="material-icons">local_dining</i> Name :  [_PLACE_] </v-list-tile-sub-title>
<v-list-tile-sub-title><i class="material-icons">location_on</i> Address : [_ADDRESS_]</v-list-tile-sub-title>
<v-list-tile-sub-title><i class="material-icons">assessment</i> Rating : [_RATING_] </v-list-tile-sub-title>
</v-list-tile-content></v-list-tile></v-card>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
';


card_printing($myMarkupTemplate,$address_array,$place_array,$rate_array);

                            ?>  
                           
                          
                          </v-list>

      <section>
          <v-parallax src="https://www.rituals.com/dw/image/v2/BBKL_PRD/on/demandware.static/-/Library-Sites-RitualsContent/default/dwe7a05626/ExtrabeeldKarma.jpg?sw=1440&sh=445&sm=fit&cx=0&cy=750&cw=2558&ch=790&sfrm=jpg" height="380" >
              <v-layout column align-center justify-center class="black--text">
                  <img src ="../../fig.png" height="100px" width="100px">
                  <div class="headline mb-3 text-xs-center h3 txt--black"><br/>Zomato provides the best place for you</div>
                  <em>Zomato provided the restaurants choices among 10 countries in the world,however currently not support with Sweden.</em>
                  <v-btn outline color="black" class="black lighten-2 mt-5" dark large href="https://developers.zomato.com/api?lang=pl" >
                      Know more detail
                  </v-btn>
              </v-layout>
          </v-parallax>
      </section>


  </v-app>
  


  

    <script  src="../../js/index.js"></script>






</body>



</html>

