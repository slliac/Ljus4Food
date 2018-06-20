<?php

/**
 * Class vocab
 *
 * @author Gordon
 *
 * dictionaries for all connected words for testing
 */
class vocab extends TDDD27Testing{


/**
 * \return expected output for sydney when load location API
 */
public function keysydney(){
return '{"results_found":1062,"results_start":0,"results_shown":1,"restaurants":[{"restaurant":{"R":{"res_id":18221891},"apikey":"6c58207e8e4ab77f635a964acf10d471","id":"18221891","name":"Belles Hot Chicken","url":"https:\/\/www.zomato.com\/sydney\/belles-hot-chicken-barangaroo?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1","location":{"address":"Shop 5, 33 Barangaroo Avenue, Wulugul Walk, Barangaroo, Sydney","locality":"Barangaroo","city":"Sydney","city_id":260,"latitude":"-33.8654652574","longitude":"151.2014094740","zipcode":"","country_id":14,"locality_verbose":"Barangaroo, Sydney"},"switch_to_order_menu":0,"cuisines":"American","average_cost_for_two":45,"price_range":2,"currency":"$","offers":[],"thumb":"https:\/\/b.zmtcdn.com\/data\/res_imagery\/18221891_RESTAURANT_9fd14b1ff885916856468dbe266a285a.JPG?fit=around%7C200%3A200&crop=200%3A200%3B%2A%2C%2A","user_rating":{"aggregate_rating":"3.4","rating_text":"Average","rating_color":"CDD614","votes":"203"},"photos_url":"https:\/\/www.zomato.com\/sydney\/belles-hot-chicken-barangaroo\/photos?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1#tabtop","menu_url":"https:\/\/www.zomato.com\/sydney\/belles-hot-chicken-barangaroo\/menu?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1&openSwipeBox=menu&showMinimal=1#tabtop","featured_image":"https:\/\/b.zmtcdn.com\/data\/res_imagery\/18221891_RESTAURANT_9fd14b1ff885916856468dbe266a285a.JPG","has_online_delivery":0,"is_delivering_now":0,"deeplink":"zomato:\/\/restaurant\/18221891","has_table_booking":0,"events_url":"https:\/\/www.zomato.com\/sydney\/belles-hot-chicken-barangaroo\/events#tabtop?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1","establishment_types":[]}}]}';
}

/**
 * 
 *  \return expected output for London when load location API
 */
public function keyLondon(){
return '{"results_found":4,"results_start":0,"results_shown":1,"restaurants":[{"restaurant":{"R":{"res_id":17754355},"apikey":"6c58207e8e4ab77f635a964acf10d471","id":"17754355","name":"Tokyo Sukiyaki-Tei","url":"https:\/\/www.zomato.com\/london\/tokyo-sukiyaki-tei-south-kensington?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1","location":{"address":"85 Sloane Avenue, South Kensington, London SW3 3DX","locality":"Sloane Avenue, South Kensington","city":"London","city_id":61,"latitude":"51.4926230000","longitude":"-0.1669960000","zipcode":"SW3 3DX","country_id":215,"locality_verbose":"Sloane Avenue, South Kensington, London"},"switch_to_order_menu":0,"cuisines":"Japanese","average_cost_for_two":90,"price_range":4,"currency":"\u00a3","offers":[],"thumb":"","user_rating":{"aggregate_rating":"0","rating_text":"Not rated","rating_color":"CBCBC8","votes":"2"},"photos_url":"https:\/\/www.zomato.com\/london\/tokyo-sukiyaki-tei-south-kensington\/photos?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1#tabtop","menu_url":"https:\/\/www.zomato.com\/london\/tokyo-sukiyaki-tei-south-kensington\/menu?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1&openSwipeBox=menu&showMinimal=1#tabtop","featured_image":"","has_online_delivery":0,"is_delivering_now":0,"deeplink":"zomato:\/\/restaurant\/17754355","has_table_booking":0,"events_url":"https:\/\/www.zomato.com\/london\/tokyo-sukiyaki-tei-south-kensington\/events#tabtop?utm_source=api_basic_user&utm_medium=api&utm_campaign=v2.1","establishment_types":[]}}]}';
}


/**
 * 
 *  \return expected output for London when load Zomato Location API
 */
public function expectlondon(){
return '{"location_suggestions":[{"entity_type":"city","entity_id":61,"title":"London, England and Wales","latitude":51.511181,"longitude":-0.120359,"city_id":61,"city_name":"London","country_id":215,"country_name":"United Kingdom"}],"status":"success","has_more":0,"has_total":0}';
}


/**
 * 
 *  \return expected output for Sydney when load Zomato Location API
 */

public function expectsydney(){
return '{"location_suggestions":[{"entity_type":"city","entity_id":260,"title":"Sydney, New South Wales","latitude":-33.865,"longitude":151.2094,"city_id":260,"city_name":"Sydney","country_id":14,"country_name":"Australia"}],"status":"success","has_more":0,"has_total":0}';
}



}




?>