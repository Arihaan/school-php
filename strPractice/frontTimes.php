<!DOCTYPE html>
<html>
    <h2> frontTimes function </h2>
    <title> PHP </title>
    <body>
        <?php        
           function frontTimes($word, $num){
               $firstThree = substr($word, 0, 3);
               for ($i=0; $i<$num; $i++){
                   print $firstThree;
               }
           }
           frontTimes("HelloWorld", 4);
        ?>
    </body>
</html>    
