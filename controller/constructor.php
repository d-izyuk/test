<?php
/**
 * Created by PhpStorm.
 * User: Izyuk
 * Date: 15.03.2018
 * Time: 9:56
 */

class controllerConstructor{
    public function index(){
        require_once ('module/model.php');

        $model = new moduleConstructor();
        $data['results'] =  $model->getMenu();

        extract($data);
        include ('view/constructor.php');
    }
}