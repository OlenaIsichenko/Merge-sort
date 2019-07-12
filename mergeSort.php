<?php
function sortArr($arr) {
    $arr1=[];
    $arr2=[];
    $lenght = count($arr);
    $halfLenght = intval(count($arr)/2);
    for ($i=0; $i < $halfLenght; $i++) {
        array_push($arr1, $arr[$i]);
        sort($arr1);
    };
    for ($i=$halfLenght; $i < $lenght; $i++) {
        array_push($arr2, $arr[$i]);
        sort($arr2);
    };
    return mergeArr($arr1, $arr2);
};

function mergeArr($arr1, $arr2) {
    $sortArr=[];
    while (count($arr1) > 0 && count($arr2) > 0) {
        if ($arr1[0] < $arr2[0]) {
            array_push($sortArr, $arr1[0]);
            array_shift($arr1);
        } elseif ($arr1[0] > $arr2[0]) {
            array_push($sortArr, $arr2[0]);
            array_shift($arr2);
        } elseif ($arr1[0] == $arr2[0]){
            array_push($sortArr, $arr1[0]);
            array_push($sortArr, $arr2[0]);
            array_shift($arr1);
            array_shift($arr2);
        } 
       
    }
    array_splice($sortArr, count($sortArr), 0, $arr1);
    array_splice($sortArr, count($sortArr), 0, $arr2);
    return $sortArr;
};
$arr = [4, 1, 7, 5, 9, 4, 3, 5, 24, 1, 0, 8, 7];
$a = sortArr($arr);
print_r ($a);
?>

