<?php
# PHP Basic Algorithm: Exercises, Practice, Solution
# Author: @i-am-ivan
# PHP 7.4
# Title: PHP Basic Algorithm [136 exercises with solution]

# NOTE: Most are found online, the idea is how many I could complete without online help, best to test my problem solving skills

/*
4. Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200.
Sample Input:
103
90
89
Sample Output:
bool(true)
bool(true)
bool(false)
*/
function ten_of_n($n){
  return ($n >= 90) && ($n <= 110) ? true : false;
}

print(ten_of_n(103) . "\n");
print(ten_of_n(90) . "\n");
print(ten_of_n(89) . "\n");