<?php

class Model
{
    /**
     * Empty contructor
     * So as to not trigger deprecated warning
     */
    public function __construct() {}

    private function call($method, $url, $data = array())
    {
        $post_data = json_encode($data);

        $curl  = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 

        $result = curl_exec($curl);

        echo $result;
    }
}
