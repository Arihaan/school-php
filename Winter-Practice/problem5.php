<!DOCTYPE html>
<html>
    <h2> PRACTICE PROBLEM #5 </h2>
    <title> Problem 5 </title>
    <body>
        <?php
            $nums = array(11, 24, 19, 99, 109);
            function sum($nums){
                $amount = count($nums);
                echo $nums[0] + $nums[$amount - 1];
            }
            sum($nums);
        ?>
    </body>
</html>    