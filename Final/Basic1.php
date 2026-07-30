<!DOCTYPE html>
<html>
<body>
<!-- 1 -->
 <?php

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area = " . $area . "<br>";
echo "Perimeter = " . $perimeter;

?>

<!-- 2 -->
 <?php

$amount = 1000;

$vat = $amount * 0.15;

echo "Amount = " . $amount . "<br>";
echo "VAT = " . $vat;

?>

<!-- 3 -->
 <?php

$number = 15;

if($number % 2 == 0)
{
    echo "Even Number";
}
else
{
    echo "Odd Number";
}

?>

<!-- 4 --> 
 <?php

$a = 10;
$b = 25;
$c = 15;

if($a > $b && $a > $c)
{
    echo "Largest Number = " . $a;
}
elseif($b > $a && $b > $c)
{
    echo "Largest Number = " . $b;
}
else
{
    echo "Largest Number = " . $c;
}

?>

<!-- 5 --> 
 <?php

for($i = 10; $i <= 100; $i++)
{
    if($i % 2 != 0)
    {
        echo $i . "<br>";
    }
}

?>

<!-- 6 --> 
 <?php

$arr = array(10, 20, 30, 40, 50);

$search = 30;
$found = false;

for($i = 0; $i < count($arr); $i++)
{
    if($arr[$i] == $search)
    {
        $found = true;
        break;
    }
}

if($found)
{
    echo "Element Found";
}
else
{
    echo "Element Not Found";
}

?>

<!-- 7(a) --> 
 <?php

for($i = 1; $i <= 3; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "* ";
    }

    echo "<br>";
}

?>

<!-- 7(b) --> 
 <?php

for($i = 3; $i >= 1; $i--)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $j . " ";
    }

    echo "<br>";
}

?>

<!-- 7(c) --> 
 <?php

$ch = 'A';

for($i = 1; $i <= 3; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $ch . " ";
        $ch++;
    }

    echo "<br>";
}

?>
</body>
</html>