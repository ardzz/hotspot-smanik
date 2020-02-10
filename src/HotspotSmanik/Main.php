<?php

namespace App\HotspotSmanik;
use \GuzzleHttp\Client;

class Main {

    function IsConnectedWiFi(){
        $url = "http://192.10.80.1";
        
        if(!filter_var($url, FILTER_VALIDATE_URL)){
            return false;
        }

        $curlInit = curl_init($url);
        
        curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curlInit, CURLOPT_HEADER, 1);
        //curl_setopt($curlInit, CURLOPT_NOBODY, 1);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, 1);
        
        $response = curl_exec($curlInit);
        $httpcode = curl_getinfo($curlInit, CURLINFO_HTTP_CODE);
        curl_close($curlInit);
    
        return ($httpcode == 302);
    }

    function login(){
        $client = new Client([
            "base_uri" => "http://192.10.80.1",
        ]);
        $response = $client->request("POST", "login", [
            "form_params" => [
                "dst"   => "https://www.google.com",
                "popup" => "true",
                "username" => $this->username,
                "password" => $this->password
            ]

            // debug mode !!!
            /*"verify" => false,
            "proxy" => "tcp://127.0.0.1:8080"*/
        ]);
        return strpos($response->getBody(), "If nothing happens");
    }

}

?>