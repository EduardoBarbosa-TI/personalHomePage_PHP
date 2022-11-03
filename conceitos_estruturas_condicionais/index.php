<?php

$bool = true  && false; // false
var_dump($bool);

$bool = (true  and false); //true
var_dump($bool);

var_dump( 7 == 7  and 9 < 7);

var_dump( 7 != 7  or 9 < 7);

var_dump( 7 !== '7'  or 9 < 7);

var_dump( 7 === 7  xor 9 < 7);


?>