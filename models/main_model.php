<?php
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 19.03.2018
 */

class Main_model extends Model{

    function __construct(){

        parent::__construct();
    }

    public function getCurl(){

        $curl = new Curl();

        $response = $curl->get('http://www.bbc.com/news');

        $doc = phpQuery::newDocumentPHP($response->body);

        $data = $doc->find('.gs-c-promo');

        return $data;
    }
}