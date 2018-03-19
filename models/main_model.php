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

    public function getCountArticle(){

        $articles = $this->getCurl();

        $count = count($articles);

        return $count;
    }

    public function getPage($page=false){

        if($page === false) {

            $page = 1;
        }
        $this->limit = 5;

        $count = $this->getCountArticle();

        $this->total_pages = ceil($count/$this->limit);

        $this->offset = ($page - 1) * $this->limit;
    }

    public function getListModel($offset, $limit){

        $data = $this->getCurl();

        $newdata = (array)$data;

        $article = array_slice($newdata, $offset,($limit + 1));

        return $article;
    }
}