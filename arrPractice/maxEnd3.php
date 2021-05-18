<!DOCTYPE html>
<html>
    <h2> maxEnd3 function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function maxEnd3($arr){
                if($arr[0]>$arr[2]){
                    $arr[1] = $arr[0];
                    $arr[2] = $arr[0];
                } elseif($arr[2]>$arr[0]){
                    $arr[0] = $arr[2];
                    $arr[1] = $arr[2];                   
                }
                return "[$arr[0], $arr[1], $arr[2]]";
            }
            $array = array(11, 2, 9);
            echo maxEnd3($array);                                        
        ?>
    </body>
</html>    
