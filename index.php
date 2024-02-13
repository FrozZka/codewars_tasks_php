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
        function tribonacci($signature, $n) {
            $new_arr = [];
            if($n == 0){
                return [];
            } else if($n == 1){
                return [$signature[0]];
            } else if($n == 2){
                return [$signature[0], $signature[1]];
            } else if ($n == 3){
                return $signature;
            } else{
                $new_arr = $signature;
                for($i = 3; $i < $n; $i++){
                    $new_arr[$i] = $new_arr[$i - 3] + $new_arr[$i - 2] + $new_arr[$i - 1];
                }
                return $new_arr;
            }
        }
    ?>
</body>
</html>