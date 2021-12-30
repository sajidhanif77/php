<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    declare(strict_types = 1);
    <?php
    
    function calculate(int $year):string
    {
        return $year - 10;
    }
    echo calculate(2001);
    ?>
</body>
</html>