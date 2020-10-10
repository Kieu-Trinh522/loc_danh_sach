<?php
$array = [3, 5, 6, 2, 8, 1];
$min = $array[0];
for ($i = 0; $i < count($array); $i++) {
    if ($min > $array[$i]) {
        $min = $array[$i];
    }

}
echo $min;