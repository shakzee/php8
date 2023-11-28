<?php


function formateValue(mixed $input):mixed {
    if (is_array($input)){
        return implode(',',$input);
    }
    return $input;
}
var_dump(formateValue('any data'));
//function processInput(mixed $input):mixed {
//    return $input;
//}
//var_dump(processInput(10));


