<?php
/**
 * Created by PhpStorm.
 * User: Izyuk
 * Date: 15.03.2018
 * Time: 10:28
 */

class controllerAdd
{
    public function index(){
        include ('view/add.php');
    }
    public function addProduct(){
        $p_name_arr = $_POST;

        require_once ('module/model.php');
        $model = new moduleConstructor();
        $model->addProduct($p_name_arr);
    }
}