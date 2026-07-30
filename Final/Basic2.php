<!DOCTYPE html>
<html>
<body>
<!-- 1 -->
 <?php

$principal = 10000;
$rate = 5;
$time = 2;

$simpleInterest = ($principal * $rate * $time) / 100;

echo "Principal = " . $principal . "<br>";
echo "Rate = " . $rate . "%<br>";
echo "Time = " . $time . " Years<br>";
echo "Simple Interest = " . $simpleInterest;

?>
<!-- 2 -->
 <?php

$number = 17;
$isPrime = true;

if($number <= 1)
{
    $isPrime = false;
}
else
{
    for($i = 2; $i < $number; $i++)
    {
        if($number % $i == 0)
        {
            $isPrime = false;
            break;
        }
    }
}

if($isPrime)
{
    echo $number . " is a Prime Number";
}
else
{
    echo $number . " is Not a Prime Number";
}

?>

<!-- 3 -->
 <?php

$number = 5;
$factorial = 1;

for($i = 1; $i <= $number; $i++)
{
    $factorial = $factorial * $i;
}

echo "Factorial of " . $number . " = " . $factorial;

?>

<!-- 4 -->
 <?php

$numbers = array(10, 20, 30, 40, 50);

$sum = 0;

for($i = 0; $i < count($numbers); $i++)
{
    $sum = $sum + $numbers[$i];
}

$average = $sum / count($numbers);

echo "Sum = " . $sum . "<br>";
echo "Average = " . $average;

?>

<!-- 5 -->
 <?php

for($i = 1; $i <= 4; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $i . " ";
    }

    echo "<br>";
}

?>
</body>
</html>