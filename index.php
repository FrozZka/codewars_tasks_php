<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codewars tasks php</title>
</head>
<body>
    <?php
        function productFib($prod) {
            $arr[0] = 0;
            $arr[1] = 1;
            $i = 1;

            while(($arr[$i - 1] * $arr[$i]) < $prod){
                $arr[] = $arr[$i - 1] + $arr[$i];
                $i++;
            }

            if (($arr[$i - 1] * $arr[$i]) == $prod){
                return([$arr[$i - 1], $arr[$i], true]);
            } else{
                return ([$arr[$i - 1], $arr[$i], false]);
            }
        }
    ?>
</body>
</html>