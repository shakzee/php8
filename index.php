<?php
#[Attribute]
class Important{

}

class  Project {
   #[Important]
    public string $deadline;
}

$ReflectionClass = new ReflectionClass(Project::class);
$properties = $ReflectionClass->getProperties();
//var_dump($properties);
foreach ($properties as $proprety){
    $attributes = $proprety->getAttributes();
    foreach ($attributes as $attribute){
        echo $attribute->getName();
    }
}



//$status = 522522;
//$message = match($status){
//    200,300=>'ok',
//    400=>'not found.',
//    500=>'Server Error',
//    default=> 'Default error here'
//};
//
//$timeofDay = match('evening'){
//    'morning'=>'coffee',
//    'afternoon'=>'taa',
//    'evening'=>'milk',
//};
//echo $timeofDay;

