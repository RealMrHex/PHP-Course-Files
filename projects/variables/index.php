<?php

#region Episode 1
$firstName = "Armin"; #----------
$age = 25;            #         |
/*                              |
  firstName 0x000001 Armin ------
  age       0x000002 25         |
*/                   #          |
#                               |
#                               |
# echo $firstName;# -------------

// PascalCaseNaming, MyFirstVariable [Class]
// camelCaseNaming,  myFirstVariable [Varaible, Function]
// snake_case_naming, my_first_variable | lowercase
// SNAKE_CASE_NAMING, MY_FIRST_VARIABLE | UPPERCASE
#=========================================================
/**
 * Rule #1: dollar sign is required => $
 * Rule #2: special corrects are not allowed.
 * -exception: underline (_) allowed.
 * Rule #3: space not allowed. e.g. $my first variable ❌
 * Rule #4: underline is allowed without any limits. e.g. $______
 */

$my_first_variable = 10; // ✅

$_ = 1;     // ✅
$__ = 2;    // ✅
$___ = 3;   // ✅
$____ = 4;  // ✅

$myFirstVariable = 5;
#endregion 

/**
 * LABEL          OFFSET      VALUE
 * username      0x000001     admin -> manager
 * password      0x000002     12345 -> changeme
 */


$username = 'admin'; 
$password = '12345';

echo $username;
echo "<br>";
echo $password;
echo "<hr>";

$username = 'manager';
$password = 'changeme';

echo $username;
echo "<br>";
echo $password;
echo "<hr>";

$_ = [];     // []
$_ = 10;     // 10
echo $_;
$_ = "text"; // text
echo $_;
$_ = false;  // false -> 0
echo $_;
$_ = 10.50;  // 10.50
echo $_;