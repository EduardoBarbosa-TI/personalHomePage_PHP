<?php

declare(strict_types=1);

$conn = null; 
   
try{
    $conn = new PDO('mysql:host=mysql;dbname=pw_exemple', 'root', '1q2w3e4r5t');
}catch(Exception $e){
    echo $e->getMessage();
    die();
}

return $conn;

?>