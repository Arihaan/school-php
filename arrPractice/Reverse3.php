<!DOCTYPE html>
<html>
    <h2> Reverse3 function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function Reverse3($arr){
                $new_Array = array($arr[2], $arr[1], $arr[0]);
                return "[$new_Array[0], $new_Array[1], $new_Array[2]]";
            }
            $array = array(11, 2, 92);
            echo Reverse3($array);                                        
        ?>
    </body>
</html>    
