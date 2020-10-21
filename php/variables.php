<?php

#coments one line#
//coments one line//
/*coments for 
more than 
one line */

$firstname = "Luis";
$lastname = "Guerra";

echo $name;
print $name;

//concatenate 
echo "Name: ".$firstname;
echo "<br>" //salto de linea
print "Name: $firstname";

#variables de tipo numerico#

$score = 10;
echo $score;

$variableone = 10;
$variabletwo = 20;

$addition = $variableone + $variabletwo;

echo "Result: $addition";

//functions 
function hello(){
    print "Hello";
}

hello();

function hellouser($name){
    return "Hello".$name;
}

echo (hellouser("Ricardo"));

//switch

$month = 3;

switch ($month) {
    case '1':
        print "Enero";
        break;
    case '2':
        print "Febrero"
        break;
    case '3':
        print "Marzo"
        break;   
    default:
        echo "Ninguno";
        break;
}

$edad = array("Pablo" =>"30", "Armando"=>"25", "Regina"=>"29","Ricardo"=>"28");

echo $edad["Armando"];
?>