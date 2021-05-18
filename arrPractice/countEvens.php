<!DOCTYPE html>
<html>
    <h2> countEvens function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function countEvens($arr){
                foreach($arr as $value){
                    if ($value % 2 == 0){
                        $amt++;
                    }
                }
                echo $amt;
            }
            $tryArray = array(1, 3, 5, 4, 10);
            countEvens($tryArray);
        ?>
    </body>
</html>    
