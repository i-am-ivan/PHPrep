<?php
# PHP Basic Algorithm: Exercises, Practice, Solution
# Author: @i-am-ivan
# PHP 7.4
# Title: PHP Basic Algorithm [136 exercises with solution]

# NOTE: Most are found online, the idea is how many I could complete without online help, best to test my problem solving skills

/* 1. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
  Sample Input
  1, 2
  3, 2
  2, 2
  Sample Output:
  3
  5
  12
 */

function sum_or_triple_sum($x, $y){
  # Check if the 2 variables are the same
  # First constraint
  if($x == $y){
   return ($x + $y) * 3;
  # Second constraint
  }else{
    return $x + $y;
  }
  # A shorter more elegant way
  # return ($x == $y) ? ($x + $y) * 3 : $x + $y;
}
# Call function above
print(sum_or_triple_sum(1, 2) . "\n"); # Test 1
print(sum_or_triple_sum(3, 2) . "\n"); # Test 2
print(sum_or_triple_sum(2, 2) . "\n"); # Test 3
