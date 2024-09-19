<?php
# PHP Basic Algorithm: Exercises, Practice, Solution
# Author: @i-am-ivan
# PHP 7.4
# Title: PHP Basic Algorithm [136 exercises with solution]

# NOTE: Most are found online, the idea is how many I could complete without online help, best to test my problem solving skills


/*
5. Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.
Sample Input:
"if else"
"else"
"if"
Sample Output:
if else
if else
if
*/

function string_append($s){
    #
    return strpos($s, 'if') === 0 ? $s : "if ".$s;
}

print(string_append("if else") . "\n"); # Test 1
print(string_append("else") . "\n");
print(string_append("if") . "\n");