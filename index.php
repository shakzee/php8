<?php
$status = 522522;
$message = match($status){
    200,300=>'ok',
    400=>'not found.',
    500=>'Server Error',
    default=> 'Default error here'
};

$timeofDay = match('evening'){
    'morning'=>'coffee',
    'afternoon'=>'taa',
    'evening'=>'milk',
};
echo $timeofDay;

