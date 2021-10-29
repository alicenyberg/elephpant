<?php

$date = date("d-m-Y");




function madeBy($firstName, $lastName)
{
    return "Made by $firstName $lastName";
}
$author = madeBy('Alice', 'Nyberg');
