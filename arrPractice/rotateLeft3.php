<!DOCTYPE html>
<html>
    <h2> rotateLeft3 function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function rotateLeft3($arr){
                $new_Array = array($arr[1], $arr[2], $arr[0]);
                return "[$new_Array[0], $new_Array[1], $new_Array[2]]";
            }
            $array = array(1, 2, 92);
            echo rotateLeft3($array);                
        ?>
    </body>
</html>    
