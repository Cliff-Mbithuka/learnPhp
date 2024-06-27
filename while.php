<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$index = 1;
while($index <= 5){
    echo "$index <br>";
    $index++;
}

$target = 6;
do{
echo "$target <br><br><br>";
$target++;
}while($target <= 10);
{
    $j = 1;
    while($j <= 3){
        echo "$j <br><br><br>";
        $j++;
    }
}

//for loops
$cliffNumbers = array(4,8,14,16,23,42);
for($i = 0; $i < count($cliffNumbers); $i++){
echo "$cliffNumbers[$i] <br>";
};

    ?>
</body>
</html> 