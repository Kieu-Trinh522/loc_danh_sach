<?php
function findMax($array){
    $max = $array[0][0];
    for ($i = 0; $i < count($array) ;$i++){
        for ($j = 0; $j <count($array[$i]) ;$j++){
            if ($max < $array[$i][$j]){
                $max = $array[$i][$j];
            }
        }
    }
    return $max;
}

$arr = [
    [1,2,3],
    [3,7,3],
    [3,73,31],
    [35,7,3]
];

echo findMax($arr);
