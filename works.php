<?php
echo "WELCOME!";
echo '<br>';

require "my_add_functions.php";
include "other_functions.php";

$sum_1 = sum_func(10,2);
echo "Sum = ", $sum_1;
echo '<br>';

$mult = multiply_func($sum_1);
echo "Product = ", $mult;
echo '<br>';

?>