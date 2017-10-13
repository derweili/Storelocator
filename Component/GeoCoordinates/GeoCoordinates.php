<?php

namespace VjfStorelocator\Component\GeoCoordinates;

class GeoCoordinates
{

    /**
     * @param \Shopware\Components\Logger $logger
     */
    public function __construct()
    {

    }

    /**
     * @param string $address
     * @return array
     */
    public function getCoordinates($address)
    {
      //replace all the white space with "+" sign to match with google search pattern
      $address = str_replace(" ", "+", $address);

      $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";

      $response = file_get_contents( $url );

      //generate array object from the response from the web
      $json = json_decode($response,TRUE);

      return array(
        "lat" => $json['results'][0]['geometry']['location']['lat'],
        "lng" => $json['results'][0]['geometry']['location']['lng']
      );

    }
}
