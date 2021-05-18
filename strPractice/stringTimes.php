<!DOCTYPE html>
<html>
    <h2> stringTimes function </h2>
    <title> PHP </title>
    <body>
        <?php        
           function stringTimes($word, $num){
               for ($i=0; $i<$num; $i++){
                   print $word;
               }
           }
           stringTimes("Hi", 10);
        ?>
    </body>
</html>    