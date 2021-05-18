<!DOCTYPE html>
<html>
    <h2> sum3 function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function sum3($arr){
                for($i=0;$i<sizeOf($arr);$i++){
                    $sum += $arr[$i];
                }
                echo $sum;
            }
            $array = array(1, 2, 92, 0);
            sum3($array);                
        ?>
    </body>
</html>    
