<?php
/**
 * Created by PhpStorm.
 * User: Izyuk
 * Date: 15.03.2018
 * Time: 9:40
 */

if($_GET['page'] == null){
    $_GET['page'] = '';
}
if(isset($_GET['page'])) {
    switch ($_GET['page']) {
        case '':
            require_once('controller/index.php');
            $page = new controllerIndex();
            break;
        case 'index':
            require_once('controller/index.php');
            $page = new controllerIndex();
            break;
        case 'add':
            require_once('controller/add.php');
            $page = new controllerAdd();
            break;
        case 'menu':
            require_once('controller/menu.php');
            $page = new controllerMenu();
            break;
        case 'constructor':
            require_once('controller/constructor.php');
            $page = new controllerConstructor();
            break;
        default:
            require_once('controller/error.php');
            $page = new controllerError();
    }
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if(method_exists($page, $action)){
            call_user_func_array(array($page,$action),array());
            //$page->{$action};
        }
    }
    else
    {
        $page->index();
    }

}

