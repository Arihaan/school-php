<!DOCTYPE html>
<html>
    <h2> stringBits function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function stringBits($word){
                for($i=0; $i<strlen($word); $i++){
                    if($i % 2 == 0){
                        print $word[$i];
                    }
                }
            }
            stringBits("hheelllloo");
        ?>
    </body>
</html>    
