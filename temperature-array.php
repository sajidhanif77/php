<?php
//A temperature array is given with temperature values > 0 and temperature values < 0.
//We need to find out the temperature closest to zero among the positive and negative array_count_values
//if there are two temperatures with same absolute value, the positive value will win.

$tempArray = [10,-7,-5,2,-3,5,8,-2,8];
$closestToZero;
$negativeTemp = [];
$positiveTemp = [];

foreach ($tempArray as $temp)
{
    if ($temp == 0)
    {
        $closestToZero = $temp;
    }
    elseif ($temp < 0)
    {
        array_push($negativeTemp,$temp);
    }
    else
    {
        array_push($positiveTemp,$temp);
    }
}

if(isset($closestToZero))
{
    echo "Temperature closest to 0 recorded in your city is: $closestToZero";
}

if(isset($negativeTemp))
{   
    sort($negativeTemp);
    echo '<h3>';
        echo "Negative Temperature Array";
    echo '</h3>';
    echo '<pre>';
        rsort($negativeTemp);
        print_r($negativeTemp);
    echo '</pre>';
}

if(isset($positiveTemp))
{
    sort($positiveTemp);
    echo '<h3>';
        echo "Positive Temperature Array";
    echo '</h3>';
    echo '<pre>';
            print_r($positiveTemp);
    echo '</pre>';
}

if ((isset($negativeTemp)) and (isset($positiveTemp)))
{
   
        if (abs($positiveTemp[0]) == abs($negativeTemp[0]))
        {
            $closestToZero = abs($positiveTemp[0]);
            echo "Temperature closest to 0 recorded in your city is: +$closestToZero";
        
        }
        else
        {
            if (abs($positiveTemp[0]) < abs($negativeTemp[0]))
            {
                $closestToZero = abs($positiveTemp[0]);
                echo "Temperature closest to 0 recorded in your city is: +$closestToZero";
            
            }
            else
            {
                $closestToZero = abs($negativeTemp[0]);
                echo "Temperature closest to 0 recorded in your city is: +$closestToZero"; 
            }

        }
}

url()
?>