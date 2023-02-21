<?php

interface BinaryOperation{
    function calculate($first = 5,$second = 10);
}

class Summa implements BinaryOperation {
    function calculate($first = 5,$second = 10){
        $sum = $first + $second;
        echo 'Сумма = '.$sum;
    }
}

class Difference implements BinaryOperation {
    function calculate($first = 5,$second = 10){
        $diff = $first - $second;
        echo '<br> Разность = '.$diff;
    }
}

class Multiplication implements BinaryOperation {
    function calculate($first = 5,$second = 10){
        $multi = $first * $second;
        echo '<br> Умножение = '.$multi;
    }
}

class Division implements BinaryOperation {
    function calculate($first = 5,$second = 10){
        $divi = $first / $second;
        echo '<br> Деление = '.$divi;
    }
}




$call_sum = new Summa();
$call_diff = new Difference();
$call_mult = new Multiplication();
$call_divi = new Division();

$call_sum->calculate();
$call_diff->calculate();
$call_mult->calculate();
$call_divi->calculate();

?>


