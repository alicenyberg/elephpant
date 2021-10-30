<?php

$date = date("d-m-Y");




function madeBy($firstName, $lastName)
{
    return "$firstName $lastName";
}
$author = madeBy('Alice', 'Nyberg');




$startDate = date("Y-m-d");
$endDate = "2022-01-06";
$daysLeft = daysLeft($startDate, $endDate);

function daysLeft($startDate, $endDate)
{
    $days = strtotime($startDate) - strtotime($endDate);
    return abs($days / 86400);
}
