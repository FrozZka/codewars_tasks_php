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
        function moveZeros(array $items)
        {
            $new_items = [];
            $count_null = 0;
            foreach($items as $var){
                if(empty($items)){
                    return [];
                } else if(is_bool($var) || is_null($var)){
                    $new_items[] = $var;
                } else if ($var == 0){
                    $count_null += 1;
                } else{
                    $new_items[] = $var;
                }
            }
            for ($i = 0; $i < $count_null; $i++){
                $new_items[] = 0;
            }
            print_r($new_items);
        }
        moveZeros([]);
    ?>
</body>
</html>