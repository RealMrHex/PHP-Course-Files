<?php

$var1  = 'Hello';            // string
$var2  = 15;                 // int/integer
$var3  = 15.5;               // float/double
$var4  = true;               // bool/boolean
$var5  = null;               // null
$var6  = ['a', 'b', 'c'];    // array
$tvar1 = gettype($var1);
$tvar2 = gettype($var2);
$tvar3 = gettype($var3);
$tvar4 = gettype($var4);
$tvar5 = gettype($var5);
$tvar6 = gettype($var6);

echo "
<pre>
var1: $tvar1
var2: $tvar2
var3: $tvar3
var4: $tvar4
var5: $tvar5
var6: $tvar6
</pre>
";
echo "<hr>";
// type safety!
$firstName = 'Armin'; // string  ✅
$firstName = 10;      // integer ❌

// dynamic type?
$varDynamic = 10; // integer
echo "Var Dynamic: " . gettype($varDynamic) . "<br>";
$varDynamic = 'Armin'; // string
echo "Var Dynamic: " . gettype($varDynamic) . "<br>";
$varDynamic = false; // boolean
echo "Var Dynamic: " . gettype($varDynamic) . "<br>";
$varDynamic = 10.5; // double/float
echo "Var Dynamic: " . gettype($varDynamic) . "<br>";

echo "<hr>";

// JAVA - Type Safe | Static Type
$varStatic = 'Armin'; // string
echo "Var Dynamic: [$varStatic] -> " . gettype($varStatic) . "<br>";
$varStatic = '10'; // string
echo "Var Dynamic: [$varStatic] -> " . gettype($varStatic) . "<br>";