<?php

include 'Food.php';
include 'APIrequest.php';
require_once 'EAPI.php';
require_once 'ZAPI.php';
defined('BASEPATH') or exit('No direct script access allowed');


//path for testing Zomato API
//curl -X GET --header "Accept: application/json" --header "user-key: 6c58207e8e4ab77f635a964acf10d471" https://developers.zomato.com/api/v2.1/search?entity_id=61&entity_type=city&q=cake&count=2


class Welcome extends CI_Controller
{

    /**
     * 
     * Welcome.php
     * @author Gordon
     * controller of all the functions that needed for TDDD27 's project
     */




    public function index()
    {
        /**
         * index of the page
         *
         * return the introduction of the website
         */

        $this->load->view('welcome_message');
    }


    public function notfind(){
        /**
         *
         * notfindpage.php
         *
         * return 404 page if there didn 't exist the page
         *
         */
        $this->load->view('notfind');
    }

    public function advSearch(){
        /**
         * 
         * advance search linkage 
         * 
         * return to the advSearch page
         * 
         * 
         */
        $this->load->view('advSearch');
    }

    public function help(){
     /**
      *
      * help page linkage
      * return to the help page
      *
      */
      $this->load->view('help');
    }


    public function form()
    {
        /**
         *
         * Connect datum from EAPI to View "Form"
         * 
         *
         */

        $food = new Food();
        $epiobj = new EAPI();
        if(isset($_GET["ul"])) {
            $objheader = $epiobj->APICall($_GET["search"], $_GET["ul"], $_GET["ll"], $_GET["health"]);
        }else{
            $objheader = $epiobj->APICall($_GET["search"]);
        }
        $food->setRecipe($epiobj->RecipeRequest($objheader));
        $food->setImage($epiobj->ImageRequest($objheader));
        $label = $food->getRec();
        $image = $food->getImage();
        $_SESSION["image"] = $image;
        $_SESSION["label"] = $label;
        $data['image'] = $image;
        $data['arr'] = $epiobj->ingredientSearch($objheader);
        $data['label'] = $label;
        $this->load->view('form', $data);
    }

    public function location()
    {
        /**
         *
         * Grab the location by using Zomato API , datum of latitude and longtitude supported with Eadamai API.
         * and using the Google MAP API to represent the datum into the map size.
         */
        $_SESSION["Place"] = $_GET["taskOption"];
        $loc_Read = $_SESSION["Place"];
        $cusine = $_GET["cuisine"];
        $zapi = new ZAPI();
        $buffer = json_decode($zapi->syncZomatoServer($loc_Read, $cusine), true);

        if(!is_array($buffer)){
            header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
        }

        $count = count($buffer) - 1;
        //echo $count;


        //var_dump($buffer);
        $address = array();
        $latitude = array();
        $longitude = array();
        $rating = array();
        $outlook = array();
        $placename = array();


        for ($i = 0; $i < $count - 1; $i++) {
            $address[$i] = $buffer["restaurants"][$i]["restaurant"]["location"]["address"];
            if(!isset($address[$i])){
                header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
            }
            $latitude[$i] = $buffer["restaurants"][$i]["restaurant"]["location"]["latitude"];
            if(!isset($latitude[$i])){
                header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
            }
            $longitude[$i] = $buffer["restaurants"][$i]["restaurant"]["location"]["longitude"];
            if(!isset($longitude[$i])){
                header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
            }
            $rating[$i] = $buffer["restaurants"][$i]["restaurant"]["user_rating"]["aggregate_rating"];
            if(!isset($rating[$i])){
                header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
            }
            $outlook[$i] = $buffer["restaurants"][$i]["restaurant"]["featured_image"];
            if(!isset($outlook[$i])){
                header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
            }
            $placename[$i] = $buffer["restaurants"][$i]["restaurant"]["name"];
            if(!isset($placename[$i])){
                header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
            }
        }



        $data['address'] = $address;
        $data['latitude'] = $latitude;
        $data['longitude'] = $longitude;
        $data['rating'] = $rating;
        $data['outlook'] = $outlook;
        $data['placename'] = $placename;

        $this->load->view('location2', $data);
    }

}
