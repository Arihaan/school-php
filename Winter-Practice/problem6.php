<!DOCTYPE html>
<html>
    <h2> PRACTICE PROBLEM #6 </h2>
    <title> Problem 6 </title>
    <body>
        <?php
            $nums = array(11, 24, 19, 99, 109);
            function average($nums){
                $amt = count($nums);
                for($x = 0; $x<=$amt-1; $x++){
                    $sum += $nums[$x];
                }
                echo "The average is: " . $sum/$amt;
            }
            average($nums);
        ?>
    </body>
</html>    