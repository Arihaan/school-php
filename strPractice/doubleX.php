<!DOCTYPE html>
<html>
    <h2> doubleX function </h2>
    <title> PHP </title>
    <body>
        <?php        
           function doubleX($word){
               $len = strlen($word);
               for($i=0;$i<$len;$i++){
                   if($word[$i] == "x" && $word[$i+1]=="x"){
                       return true;
                   } elseif($word[$i] == "x" && $word[$i+1]<>"x"){
                       return false;
                   }
               }
           }
           $cond = doubleX("axaxx");
           if($cond == true){
               echo "True!";
           } else{
               echo "False!";
           }
        ?>
    </body>
</html>    
