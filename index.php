<?php
// 1
function multiply($a, $b) {
    return $a * $b;
    }
    echo multiply(3, 4);
// 2
$globalVar = 50;
function sumGlobal() {
global $globalVar;
$localVar = 100;
return $globalVar + $localVar;
}
Пример вызова:
echo sumGlobal();
// 3
function factorial($n) {
    if ($n <= 1) {
    return 1;
    }
    return $n * factorial($n - 1);
    }
    echo factorial(5); 
// 4
$array = ["apple", "banana", "cherry"];
$result = array_map(function($arr) {
return $arr;
}, $array);
print_r($result);

print_r($result); 
// 5
$sum = fn($a, $b) => $a + $b;
echo $sum(3, 4); 
// 6
function counter() {
    $count = counter();
    return function() use ($count) {
    $count++;
    return $count;
    };
    }
    $myCounter = $count;
    echo $myCounter(); // Ожидаемый результат: 1
    echo $myCounter(); 
// 7
function generateNumbers() {
    for ($i = 1; $i <= 5; i++) {
    yield $i;
    }
    }
    $generator = generateNumbers();
    foreach ($generator as $number) {
    echo $number . "\n"; 
    }
// 8
$array = [3, 7, 2, 8, 4, 10, 1];
$minValue = ______($array);
$maxValue = ______($array);
echo "Минимум: " . ______ . "\n"; // Ожидаемый результат: Минимум: 1
echo "Максимум: " . ______ . "\n";    
