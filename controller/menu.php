<?php
/**
 * Created by PhpStorm.
 * User: Izyuk
 * Date: 15.03.2018
 * Time: 10:29
 */

class controllerMenu
{
    public function index(){

        require_once ('module/model.php');

        $model = new moduleConstructor();
        $results =  $model->getMenu();

        $results_groupped = array();

        foreach ($results as $result)
        {
            if(!isset($results_groupped[$result['pname']]))
            {
                $results_groupped[$result['pname']] = array('total_price'=>0,'ingridients'=>array());
            }

            $results_groupped[$result['pname']]['ingridients'][] = $result;
            $results_groupped[$result['pname']]['total_price'] += $result['price'];
        }


        $data['results'] = $results_groupped;

        extract($data);
        include ('view/menu.php');
    }
}