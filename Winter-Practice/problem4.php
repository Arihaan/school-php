<!DOCTYPE html>
<html>
    <h2> PRACTICE PROBLEM #4 </h2>
    <title> Problem 4 </title>
    <body>
        <?php
            $nums = array(11, 24, 19, 99, 109);
            $a = $nums[0];
            $b = $nums[4];
            $nums[0] = $b;
            $nums[4] = $a;
            echo $nums[0];
        ?>
    </body>
</html>    