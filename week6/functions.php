<?php

//our function page

function sayHello() {
    echo 'Hello PHP FUNCTION!!';
}

sayHello();

echo '<h2>Arithmetic problems - cube</h2>';


function cube($num) {
$cubing = $num * $num * $num;
echo $cubing;
}

cube(5);

echo '<h2>Area - width * height</h2>';

function area($w, $l) {
    $get_area = $w * $l;
    return $get_area; 
}
$get_area = area(5, 12);
echo $get_area; 

echo '<h2>Celcius Converter</h2>';

function celcius_converter($cel) {
$far = ($cel * 9/5) + 32;
echo $far;
}

celcius_converter(100);

echo '<h2>How do we deal with arrays??? we are going to be using indexed arrays</h2>';

function area_volume($a, $b, $c) {
$area = $a * $b;
$volume = $a * $b *$c;
return array($area, $volume);
}

$my_array = area_volume(10, 5, 20);
echo '<b> This is my area:</b> '.$my_array[0].'    <br>';
echo '<b> This is my volume:</b> '.$my_array[1].'    <br>';


echo '<h2>Now we will use the list function!</h2>';



function area_volume2($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b *$c;
    return array($area, $volume);
    }

list($area, $volume) = area_volume2(5, 10, 30);
echo '<b> This is my area:</b> '.$area.'    <br>';
echo '<b> This is my volume:</b> '.$volume.'    <br>';


echo '<h2>Our Navigation!</h2>';


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


$nav ['index.php'] = 'Home';

$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Poject';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $myreturn .='<li><a class="current" href="'.$key.'">
            '.$value.'</a> </li>';
} else {
$my_return .= '<li><a style="color:green; " href=" '.$key.' "> '.$value.' </a></li>';
}
} //end foreach
return $my_return;
}

//     } // end foreach
echo '<h2>Our Navigation created with a function!</h2>';
echo make_links($nav);
echo '<h2>The implode function</h2>';
$cars = array('toyota', 'ford', 'suburu', 'audi' , 'bmw' , 'mercedes', 'lexus');

$my_cars = implode(', ',$cars);
echo $my_cars;

echo '<h2>The logic behind the wines on our form</h2>'


;