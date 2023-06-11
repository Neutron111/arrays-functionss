<?php
//Write a PHP function that accepts an array of integers and return a new array after removing odd numbers.
$numbers=[1,2,3,4,5,6,7,8];
function remove($numbers){
    for ($i = 0; $i < sizeof($numbers); $i++){
        if ($numbers[$i] % 2 !== 0){
            unset($numbers[$i]);
        }
    }
    return $numbers;
}

/******************************************************************************************************************* */
//Write a PHP function that accepts an array of strings and return the longest string found in the array,
//the function should have a 2nd argument that will hold the index of the item that have the longest
//string in the input array.


function findLongestString($arr) {
    $maxIndex = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) > strlen($arr[$maxIndex])) {
            $maxIndex = $i;
        }
    }

    return $arr[$maxIndex];
}


$strings = ["ali", "PHP", "programming", "belal", "basheer"];
$result = findLongestString($strings);
echo $result;
/*******************************************************************************************************************/
//Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each
//item in the first array by the corresponding item in the second array.

function multipl($array1, $array2) {
    $result = [];
        for ($i = 0; $i < count($array1); $i++) {
        $result[] = $array1[$i] * $array2[$i];
    }
    
    return $result;
}

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$ans = multipl($array1, $array2);
print_r($ans);


/*******************************************************************************************************************/
//Write a function to calculate the factorial of a number (a non-negative integer). The function accepts
//the number as an argument.

$ans = 1;
$x = 5; 
for ($i = 1; $i <= $x; $i++) {
    $ans *= $i;
    }
echo $ans;
/*******************************************************************************************************************/
//Write a function to check whether a number is prime or not.
function isPrime($n) {
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            echo " the number is not prime";
            break;
        }else{
            echo " the number is prime";
        }
    }
}
$n=3;
isPrime($n);


?>