<?php
$currency = function($amount) {
    $symbol = "$"; 
    return $symbol . $amount;
};


echo $currency(100) . "<br>"; 

function tax($rate) {
    return function($price) use ($rate) {
        return $price + ($price * $rate / 100);
    };
}


$vat10 = tax(10); 
echo $vat10(200) . "<br>"; 

$square = fn($x) => $x * $x;
echo $square(5) . "<br>"; 
function mapArray(array $numbers, callable $func): array {
    $result = [];
    foreach ($numbers as $num) {
        $result[] = $func($num);
    }
    return $result;
}


$nums = [1, 2, 3, 4];
$squaredNumbers = mapArray($nums, $square);
print_r($squaredNumbers); // [1, 4, 9, 16]
echo "<br>";


function double($x) {
    return $x * 2;
}

function subtractFive($x) {
    return $x - 5;
}

$compose = fn($x) => subtractFive(double($x));
echo $compose(10); 

?>