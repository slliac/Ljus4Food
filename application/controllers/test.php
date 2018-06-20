<?php
require_once "APIrequest.php";
require_once "vocab.php";
require_once 'EAPI.php';
require_once 'ZAPI.php';
//PHPUnit used for Unit testing
use PHPUnit\Framework\TestCase;


/**
 * 
 *    Class used for perform Unit Testing
 *    
 *     
 *    test if you run the following in the bash/Mac : 
 *    ./phpunit --bootstrap ../../vendor/autoload.php test --debug  --testdox-html result.html

 */
class TDDD27Testing extends TestCase
{

     public function testAPIkeylocationidentification()
     {
     /**
      * testAPIkeylocation - testing Zomato API location identication found whether works
      *  
      */
      
     $dict = new vocab();
     //test1 : London
     $londonstring = APIrequest::file_get_contents_curl_z('https://developers.zomato.com/api/v2.1/locations?query=London');
     //var_dump((string)$var);
     $this->assertEquals($londonstring,$dict->expectlondon());


     //test2 : Sydney
     $sydneystring = APIrequest::file_get_contents_curl_z('https://developers.zomato.com/api/v2.1/locations?query=Sydney');
     $this->assertEquals($sydneystring,$dict->expectsydney());

     }
     
    public function testAPIkeylocationinformation()
    {
    /**
      * testAPIkeylocationinformation - testing Zomato API location and related information whether works
      *  
      */
      $loc_Read = 'Sydney';
      $cusine   = 'Citrus Roasted Chicken';      
      $zapi = new ZAPI();
      $buffer = json_decode($zapi->syncZomatoServer($loc_Read, $cusine), true);
      $count = count($buffer) - 1;
      $address = array();
      $latitude = array();
      $longitude = array();
      $rating = array();
      $outlook = array();
      $placename = array();

      for ($i = 0; $i < $count - 1; $i++) {
          $address[$i] = $buffer["restaurants"][$i]["restaurant"]["location"]["address"];
          $latitude[$i] = $buffer["restaurants"][$i]["restaurant"]["location"]["latitude"];
          $longitude[$i] = $buffer["restaurants"][$i]["restaurant"]["location"]["longitude"];
          $rating[$i] = $buffer["restaurants"][$i]["restaurant"]["user_rating"]["aggregate_rating"];
          $outlook[$i] = $buffer["restaurants"][$i]["restaurant"]["featured_image"];
          $placename[$i] = $buffer["restaurants"][$i]["restaurant"]["name"];
      }
      $this->assertEquals($address[0],'Travelodge, 7-9 York Street, CBD, Sydney CBD');
      $this->assertEquals($latitude[0],'-33.8648951006');
      $this->assertEquals($longitude[0],'151.2055987492');
      $this->assertEquals($rating[0],'0');
      $this->assertEquals($outlook[0],'https://b.zmtcdn.com/data/pictures/6/15544856/8c4d899b312ca1df3241a11ff6220319.jpg');

     }

     public function testEadmam(){

      /**
       * 
       * testing about the function using in  edamam.
       */
        $eapiobj = new EAPI();
        $objheader = $eapiobj->APICall("chicken");

         $food = $eapiobj->RecipeRequest($objheader);
         $this->assertEquals($food[1],'Oven-Roasted Chicken Thighs');
         $this->assertEquals($food[2],'Citrus Roasted Chicken');

        $link = $eapiobj->ImageRequest($objheader);
        $this->assertEquals($link[1],'https://www.edamam.com/web-img/676/676a9be0cb7bc68b41ccc0ca765969ed.jpg');
        $this->assertEquals($link[2],'https://www.edamam.com/web-img/d4b/d4bb1e6c7a6c3738d8e01707eb0ad83d.jpg');

        $ingredient = $eapiobj->ingredientSearch($objheader);
        $this->assertEquals($ingredient[1],'8 bone-in, skin-on chicken thighs (6 to 8 ounces each)<br/>1 1/4 teaspoons sea salt<br/>Freshly ground black pepper<br/>Mild olive oil<br/>');
        $this->assertEquals($ingredient[2],'1 chicken, about 3.5 to 4 pounds<br/>1 lemon<br/>1 blood orange<br/>1 tangerine or clementine<br/>Kosher salt<br/>1/2 cup chicken broth<br/>');

     }


}
?>