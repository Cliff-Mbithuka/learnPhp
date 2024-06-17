<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $friends = array("kelvin", "tom", "Cliff", "red");
    echo count($friends); //4
    echo $friends[0]; // kelvin
    $friends[1] = 400;
    echo $friends[1]; // from tom to 400
    ?>
</body>
</html>