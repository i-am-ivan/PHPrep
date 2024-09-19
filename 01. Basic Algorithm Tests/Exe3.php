<?php
# PHP Basic Algorithm: Exercises, Practice, Solution
# Author: @i-am-ivan
# PHP 7.4
# Title: PHP Basic Algorithm [136 exercises with solution]

# NOTE: Most are found online, the idea is how many I could complete without online help, best to test my problem solving skills

/*
3. Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
Sample Input:
30, 0
25, 5
20, 30
20, 25
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false)
*/
function check_if_num_is_equal($x, $y){
  return (($x == 30) || ($y == 30) || (($x + $y) == 30)) ? true : false;
}

print(check_if_num_is_equal(30, 0) . "\n");
print(check_if_num_is_equal(25, 5) . "\n");
print(check_if_num_is_equal(20, 30) . "\n");
print(check_if_num_is_equal(20, 25) . "\n");
