<?php
# PHP Basic Algorithm: Exercises, Practice, Solution
# Author: @i-am-ivan
# PHP 7.4
# Title: PHP Basic Algorithm [136 exercises with solution]

# NOTE: Most are found online, the idea is how many I could complete without online help, best to test my problem solving skills

/*
2. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.
Sample Input:
53
30
51
Sample Output:
6
21
0
*/

function difference_between_n($n){
  # Check if the 2 variables are the same
  return ($n > 51) ? abs($n - 51) * 3 : abs($n - 51);
}

print(difference_between_n(53) . "\n");
print(difference_between_n(30) . "\n");
print(difference_between_n(51) . "\n");
