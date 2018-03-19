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

    public function index(){

            $datas = $this->model->getCurl();

        $this->view->render('main/index', $datas);
    }
}