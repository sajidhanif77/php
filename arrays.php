<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fruits = ["Apple","Orange","Banana"];

        //print_r array
        echo '<pre>';
            echo '<h3>';
                echo 'print_r($array)';
            echo'</h3>';
            print_r($fruits);
        echo '</pre>';

        //var_dump array
        echo '<pre>';
            echo '<h3>';
                echo 'var_dump($array)';
             echo'</h3>';
             var_dump ($fruits);
        echo '</pre>';

        //Add an element at the end of an array
        array_push($fruits,"Mango");
        echo '<pre>';
            echo '<h3>';
                echo 'array_push($array,$element); Adding an element at the end of Array';
            echo'</h3>';
            var_dump ($fruits);
        echo '</pre>';

        //Remove  an element at the end of an array
        array_pop($fruits);
        echo '<pre>';
            echo '<h3>';
                echo 'array_pop($array,$element); Removing an element from the end of Array';
            echo'</h3>';
            var_dump ($fruits);
        echo '</pre>';

        //array_unshift ($array,$element);Add an element to the start of an array
        array_unshift($fruits, "Mango");
        echo '<pre>';
            echo '<h3>';
                echo 'array_unshift ($array,$element); Add an element to the start of an array';
            echo'</h3>';
            var_dump ($fruits);
        echo '</pre>';

        //Remove an element from the start of an array
        array_shift($fruits);
        echo '<pre>';
            echo '<h3>';
                echo 'array_shift ($array,$element); Remove an element from the start of an array';
            echo'</h3>';
            var_dump ($fruits);
        echo '</pre>';

        //Check if a certain element is in an array, returns boolean true or false
        echo '<h3>';
                echo 'in_array ($element,$array); Returns boolean';
        echo'</h3>';
        echo in_array('Banana',$fruits); echo '</br>';

        //Check if a certain element is in an array, returns index of the element in an array
        echo '<h3>';
                echo 'array_search ($element,$array); Gives the position of element in an array';
        echo'</h3>';
        echo array_search('Banana',$fruits);

        //Merge two or more arrays into a single array
        $vegetables = ["Potatoes","Onions","Carrots"];
        $meat = ['Chicken','Fish'];
        echo '<h3>';
                echo 'array_merge ($array1,$array2); Merge two or more arrays into a single array';
        echo'</h3>';
        $fruitsVegetablesMeat = array_merge($fruits,$vegetables,$meat);
        echo '<pre>';
            print_r($fruitsVegetablesMeat);
        echo '</pre>';

        //Sort an Array; Changes the array permanently
        echo '<h3>';
                echo 'sort($array); sorts and changes array permanently';
        echo'</h3>';
        sort($fruits);
        echo '<pre>';
            print_r($fruits);
        echo '</pre>';

        //Filter an array based on criteria: In this example we pick even elements from an array
        echo '<h3>';
                echo 'filter_array($array); Filter an array based on criteria: In this example we pick even elements from an array';
        echo'</h3>';
        $numbers = [1,2,3,4,5,6,7,8,9];

        //array_filter — Applies the callback to the elements of the given arrays, first argument array, second callback function
        function getEven($n){return $n%2==0;}
        function getOdd($n){return $n%2!=0;}
        $even = array_filter($numbers, "getEven");
        $odd = array_filter($numbers, "getOdd");
        echo '<pre>';
            print_r($even);
        echo '</pre>';
        echo '<pre>';
            print_r($odd);
        echo '</pre>';

        //array_map — Applies the callback to the elements of the given arrays, first argument callback function, second argument array
        //in case we apply array_map with the even odd callback functions, it returs true false instead of element for some reason
        //so used getSquare functiion instead of getEven and getOdd.
        echo '<h3>';
                echo 'array_map(callback,$array); Filter an array based on criteria: In this example we get square of elements from an array';
        echo'</h3>';
        function getSquare($n){return $n*$n;}
        $square = array_map("getSquare", $numbers);
        echo '<pre>';
            print_r($square);
        echo '</pre>';
        
        //array_chunk - Chunks an array into arrays with length elements
        //array_column — Return the values from a single column in the input array
        //array_combine — Creates an array by using one array for keys and another for its values
        //array_count_values — Counts all the values of an array
        //array_diff — Computes the difference of arrays

        $total = 0;
        for ($i=0;$i<=10;$i++)
        {
            if($i%3==0)
            {
                $total += $i;
            }
        }
        echo $total;
        echo '</br>';

        $j = 0;
        echo $j++;
        
        echo '</br>';
        
    ?>
    
</body>
</html>