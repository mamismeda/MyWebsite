<?php 
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $test = "Daniel";
    function calculator(int $num01, int $num02) {
        global $test;
        $result = $num01 + $num02;
        return $test;
    }

    $test = calculator(2, 5);
    echo $test;

    
    ?>
    
</body>
</html>