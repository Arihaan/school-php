<!DOCTYPE html>
<html>
    <h2> countXX function </h2>
    <title> PHP </title>
    <body>
        <?php        
           function countXX($word){
               $len = strlen($word);
               $num = 0;
               for($i = 0; $i<$len; $i++){
                   if (substr($word, $i, 2) == "xx"){
                       $num++;
                   }
               }
               print $num;
           }
           countXX("Helxxxcoxx");
        ?>
    </body>
</html>    
