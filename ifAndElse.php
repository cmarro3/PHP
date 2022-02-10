<?php
$a = -14;
$b = 14;
if ($a > $b) {
    echo "$a is greater than $b";
} elseif ($b > $a){
    echo "$b is greater than $a";
} else{
    echo" $a and $b are equal";
}

$isloggedIn = true;
$messege = $isloggedIn ? 'Welcome back!' : 'Hello there';
echo '<br>';
echo $messege;
echo "<br>";

//$name = $name ?: 'Joe';
//echo $name;

$x = 1;
$result = match ($x) {
    1 => 'x is 1',
};
echo $result;

