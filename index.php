<?php
function addOrConcatenate(int|string $a,int|string $b):int|string
{
    if(is_int($a) && is_int($b)){
    return $a+$b;
    }
    else{
        return $a.$b;
    }
}
var_dump(addOrConcatenate(2,'5'));


