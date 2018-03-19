<?php
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 19.03.2018
 */
class Main extends Controller {

    function __construct(){

        parent::__construct();
    }

    public function getPage($page=false){

        if($page === false) {

            $page = 1;
        }
        $this->limit = 5;

        $count = $this->model->getCountArticle();

        $this->total_pages = ceil($count/$this->limit);

        $this->offset = ($page - 1) * $this->limit;
    }

    public function index($page = false){

            $this->getPage($page);

            $datas = $this->model->getCurl();

            $count = $this->model->getCountArticle();

            $answer = $this->model->getListModel($this->offset, $this->limit);

            $data = $answer;

        $this->view->render('main/index', $datas, $this->total_pages);
    }
}