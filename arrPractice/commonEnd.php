<!DOCTYPE html>
<html>
    <h2> commonEnd function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function commonEnd($arr1, $arr2){
                if($arr1[0] == $arr2[0] || $arr1[sizeOf($arr1) - 1] == $arr2[sizeOf($arr2) - 1]){
                    echo "True!";
                } else {
                    echo "False!";
                }
            }
            $random = array(1, 2, 44, 92);
            $random2 = array(10, 99, 8, 2);
            commonEnd($random, $random2);
        ?>
    </body>
</html>    
