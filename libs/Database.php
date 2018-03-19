<?php
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 19.03.2018
 */

class Database extends PDO{

    function __construct(){

        parent::__construct('mysql:host=localhost;dbname=','root', '');
    }
}