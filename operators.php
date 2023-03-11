<?php
 $a= 99 ;
 $b = 84;
 //arithemetic operators
 echo  " the sum is " . $a + $b;
 echo "<br>";
 echo  " the difference is " . $a - $b;
 echo "<br>";
 echo  " the product is " . $a * $b;
 echo "<br>";
 echo  " the division is " . $a / $b;
 echo "<br>";
 echo  " the remainder is " . $a % $b;
 echo "<br>";
 echo  " the exponent is " . $a ** $b;
 echo "<br>";

 //assignment operators
 $x=7;
 echo  " the value of x is " . $x;
 $x=$a;
echo  " the value of x is " . $x;
  echo "<br>"; 
  $x += 7;
  echo  " the value of x is " . $x;
  echo "<br>";
  $x -= 7;
  echo  " the value of x is " . $x;
   echo "<br>";
   $x *= 7;
   echo  " the value of x is " . $x;
    echo "<br>";
    $x /= 7;
    echo  " the value of x is " . $x;
    echo "<br>"; 
    $x %= 9;
    echo  " the value of x is " . $x;
    echo "<br>";

    //comparision operators
    $x= 98;
    $y= 76;
    echo  " for x>y the result is ";
    echo var_dump($x == $y);
    echo "<br>";

    echo  " for x<y the result is ";
    echo var_dump($x < $y);
    echo "<br>";

    echo  " for x<>y the result is ";
    echo var_dump($x <> $y);
    echo "<br>";

    echo  " for x>=y the result is ";
    echo var_dump($x >= $y);
    echo "<br>";

    echo  " for x<=y the result is ";
    echo var_dump($x <= $y);
    echo "<br>";

    //logical operators
    $p= true;
    $q= false;
    echo  " for p and q the result is ";
    echo var_dump($p && $q);
    echo "<br>";

    echo  " for p or q the result is ";
    echo var_dump($p || $q);
    echo "<br>";

    echo  " for not of p the result is ";
    echo var_dump(!$p);
    echo "<br>";
?>