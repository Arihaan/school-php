<!DOCTYPE html>
<html>
    <h2> PRACTICE PROBLEM #7 </h2>
    <title> Problem 7 </title>
    <body>
        <?php
            $nums = array(11, 24, 19, 99, 109);
            $nums2 = array(11, 22, 21, 95, 223);
            function average($nums){
                $amt = count($nums);
                for($x = 0; $x<=$amt-1; $x++){
                    $sum += $nums[$x];
                }
                return $sum/$amt;
            }
            
            function compare($nums, $nums2){
                if(average($nums)>average($nums2)){
                    echo "Array 1 has a greater average.";
                } else if(average($nums)<average($nums2)){
                    echo "Array 2 has a greater average.";
                } else {
                    echo "They have the same average.";
                }
            }
            compare($nums, $nums2);
        ?>
    </body>
</html>    