<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // function getMax($num1, $num2){
    //     if(num1 > num2){
    // return num1;
    //     }else{
    //         return num2;  
    //     }
    // }

    // echo getMax(3, 60);

    function getMax($num1, $num2, $num3){
        if($num1 > $num2 && $num1 > $num3){
            return $num1;
        }else if($num2 > $num1 && $num2 > $num3){
return $num2;
        }else{
            return $num3;
        }
    }
    ?>
</body>
</html>