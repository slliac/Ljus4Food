<?php

/**
 * Class APIrequest
 *
 * @author Gordon Li
 *
 * design for API request
 */
class APIrequest{


    public function file_get_contents_curl_z($url)
    {
        /**
         *
         * 
         *
         * Make cURL request to the Zomato API Server and then return json format files.
         * \param $url the url from the request,curl run the url and return json
         * \return json format data sync from the server
         *
         */

         
        $ch = curl_init();
        $headers = [];
        $headers2 = [];
        $headers2 = 'Accept: application/json';
        $headers[] = 'user-key: 6c58207e8e4ab77f635a964acf10d471';
        //curl_setopt($ch, CURLOPT_HTTPHEADER,$headers2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    public function file_get_contents_curl_eadam($url)
    {

        /**
         *
         * 
         *
         * Make cURL request to the Edadam API Server and then return json format files.
         *
         * \param  $url - the url for doing syncorization to API
         * \return json format data that sync from server
         * 
         */

        $ch = curl_init();   
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch); 
        curl_close($ch);
        return $data;  
    }

}



?>