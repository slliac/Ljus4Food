<?php
require_once "APIrequest.php";

/**
 * Class ZAPI
 *
 * @author Gordon Li
 *
 * for ZAPI protocol communication with APIRequest classes
 *
 */
class ZAPI extends APIrequest{

    public function syncZomatoServer($loc_Read, $cusine)
    {
        /**
         *
         *
         * Plug location and cusine type for specific your search, and then make a request to the Zomato server,
         * finally return json key.
         *
         *  \param loc_Read - location that chosen by customers in form.php
         *  \param cusine   - cusine box chosen by customers in form.php
         *  \return source link of json
         */
        $apiobj = new APIrequest();
        $headoflocation = 'https://developers.zomato.com/api/v2.1/locations?query=';
        $headoflocation .= $loc_Read; 
        $src_location = $apiobj->file_get_contents_curl_z($headoflocation);
        $buffer_location = json_decode($src_location, true);
        $location_id = $buffer_location["location_suggestions"][0]["entity_id"];
        $header = 'https://developers.zomato.com/api/v2.1/search?entity_id=';
        $tail = '&entity_type=city';
        $content = '&q=' . str_replace(" ", "%20", $cusine);
        $counting = '&count=2';
        $api = $header . $location_id . $tail . $content . $counting;
        $src = $apiobj->file_get_contents_curl_z($api);
        return $src;
    }




}



?>