<?php
require_once "APIrequest.php";


/**
 * Class EAPI
 * \author  Gordon Li
 * designed for EAPI and protocol communication
 *
 */
class EAPI extends APIrequest{
    /**
         *
         * main function :
         * sync the request to Eadamam API and then used extract datum to represent in v-card format
         *
         */

public function APICall($search,$ul = 591,$ll = 722,$stringvar = 'alcohol-free'){
/**
 * 
 * for making the header of request
 * 
 * \param search - header of url
 * \param ul    - upper limit of calories
 * \param ll    - lower limit of calories
 * \param stringvar - variable of health label
 * \return decode json need to be do analysis
 */
    $apiobj = new APIrequest();
    $stmtheader = 'https://api.edamam.com/search?q=';
    $stmtend = '&app_id=aada3621&app_key=b684c0316c3e44d1ec0c91799b1a2ef3&from=0&to=3&calories='.$ul.'-'.$ll.'&health='.$stringvar;
    $apikey = $stmtheader . $search . $stmtend;
    $linkedurl = $apiobj->file_get_contents_curl_eadam($apikey);
    $oh = json_decode($linkedurl, true);
    return $oh;

}

public function RecipeRequest($objheader){
    /**
     * 
     * analysis the name that would use in each dishes
     * \param  objheader json from APIrequest
     * \return hitrecipe - the dished 's ingredient
     */
     $hitrecipe = array();
     $oh = $objheader;
     if(count($oh["hits"])==0){
         header('Location: https://ljus4food.herokuapp.com/index.php/welcome/notfind/');
     }
        for ($num = 0; $num < count($oh["hits"]); $num++) 
        {
            array_push($hitrecipe, $oh["hits"][$num]["recipe"]["label"]);
        }
     return $hitrecipe;
}


public function ImageRequest($objheader){
    /**
     * 
     * 
     * analysis the image that would use in each dishes
     * \param  objheader json from APIrequest
     * \return hitImage - the dished ingredient 's image
     * 
     */
    $oh = $objheader;
    $hitImage = array();
    for ($num = 0; $num < count($oh["hits"]); $num++) {
        array_push($hitImage, $oh["hits"][$num]["recipe"]["image"]);
    }
    return $hitImage;
}

public function ingredientSearch($objheader){
/**
 * 
 *  analysis the ingredient that would use in each dishes
 * \param  objheader json from APIrequest
 * \return $_SESSION["arr"] - the dished 's recipe array contains recipe 1-3
 * 
 */
    $oh = $objheader;
    $ingredientArray = array();
    for ($j = 0; $j < count($oh["hits"]); $j++) {
        for ($i = 0; $i < count($oh["hits"][$j]["recipe"]["ingredientLines"]); $i++) {
            $ingredientArray[] = array($j, $oh["hits"][$j]["recipe"]["ingredientLines"][$i]);
        }
    }
    
    $recipe1 = null;
    $recipe2 = null;
    $recipe3 = null;

    for ($i = 0; $i < count($ingredientArray); $i++) {
        if ($ingredientArray[$i][0] == 0) {
            $recipe1 .= ($ingredientArray[$i][1]) . '<br/>';
        }
        if ($ingredientArray[$i][0] == 1) {
            $recipe2 .= $ingredientArray[$i][1] . '<br/>';
        }
        if ($ingredientArray[$i][0] == 2) {
            $recipe3 .= ($ingredientArray[$i][1]) . '<br/>';
        }
    }

    $_SESSION["arr"] = array(
        $recipe1,
        $recipe2,
        $recipe3,
    );
    
    return $_SESSION["arr"];


}


}


?>