<?php
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 19.03.2018
 */

class View {

    public function render($name, $arg = false, $count = false){

        require_once 'views/' . $name . '.php';
    }
}