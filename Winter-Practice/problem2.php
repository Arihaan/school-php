<!DOCTYPE html>
<html>
    <h2> PRACTICE PROBLEM #2 </h2>
    <title> Problem 2 </title>
    <body>
        <?php
            $X = 10;
            $Y = 15;
            $Z = 1;
            // first if statement
            if($X>$Y && $X>$Z){
                echo "$X<br>";
            } else if($Y>$X && $Y>$Z){
                echo "$Y<br>";
            } else if($Z>$X && $Z>$Y){
                echo "$Z<br>";
            } 
            // second if statement
            if($Y>$X && $X>$Z || $Z>$X && $X>$Y){
                echo "$X<br>";
            } else if($X>$Y && $Y>$Z || $Z>$Y && $Y>$X){
                echo "$Y<br>";
            } else if($X>$Z && $Z>$Y || $Y>$Z && $Z>$X){
                echo "$Z<br>";
            } 
            // third if statement
            if($X<$Y && $X<$Z){
                echo "$X<br>";
            } else if($Y<$X && $Y<$Z){
                echo "$Y<br>";
            } else if($Z<$X && $Z<$Y){
                echo "$Z<br>";
            } 
        ?>
    </body>
</html>    