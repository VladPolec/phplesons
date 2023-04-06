<?php
declare(strict_types=1);


echo "test";

$ar1=['cat', 'dog', 'snake', '77', true, 'rat', null];


function trans ($ar1){
    $result=[];
    for($i = 0; $i<count($ar1); $i++){
        $value = $ar1[$i] ;

        switch($value){
            case 'cat':
                $string_trans = 'кiт';
                $result[$value] = $string_trans;
                break;
            case 'dog':
                $string_trans = 'собака';
                $result[$value] = $string_trans;
                break;
            case 'snake':
                $string_trans = 'змiя';
                $result[$value] = $string_trans;
                break;
            case 'rat':
                $string_trans = 'щур';
                $result[$value] = $string_trans;
                break;

            default:
                break;
        }

    }

    return $result;
}

print_r(trans($ar1));



//$connection = mysqli_connect('mysql', 'root', 'root');
//$connection->query('CREATE DATABASE `lemp_docker`');