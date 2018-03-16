<?php
/**
 * Created by PhpStorm.
 * User: Izyuk
 * Date: 15.03.2018
 * Time: 9:55
 */

class moduleConstructor
{
    public function getMenu(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "test";
        mysqli_connect($servername, $username, $password, $dbname);
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT i.pname, i.ingredient, i.price FROM products p LEFT JOIN ingredient i ON (i.pname = p.pname)";
        $result = $mysqli->query($sql);

        $arResult = array();

        while($row = $result->fetch_assoc())
        {
            $arResult[] = $row;
        }

        mysqli_close($mysqli);
        return $arResult;


    }
    public function addProduct($p_name_arr){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "test";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        foreach ($p_name_arr as $key => $value){
            $new_values = json_decode($value);
            $sql = "INSERT INTO products SET pname='". $key ."'";
            mysqli_query($conn, $sql);
            foreach ($new_values as $new_value){
                $sql2 = "INSERT INTO ingredient SET pname='". $key ."', ingredient='". $new_value->name ."', price='". (int)$new_value->price ."'";
                var_dump($sql2);
                mysqli_query($conn, $sql2);
            }
        }
        mysqli_close($conn);
    }
}