<?php
function findMin($arr) {
    $min = $arr[0];
    for ($i = 1 ; $i < count($arr) ;$i++) {
        if ($arr[$i]< $min){
            $min = $arr[$i];
        }
    }
    return $min;
}
$arr1 = [2,4,5,6,-2,2,3,4,9];
echo findMin($arr1);
