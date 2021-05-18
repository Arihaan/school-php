<?php 
    // Task one
    $nums = array(1, 2, 3, 4, 5);
    for($i=0; $i<sizeof($nums); $i++){
        $numsReversed[$i] = $nums[sizeof($nums) - 1 - $i];
    }
    $nums = $numsReversed;
?>

<?php 
    // Task two
    $nums = array(1, 2, 3, 4, 5, 5);
    $isDuplicate = false;
    for($i=0; $i<sizeof($nums); $i++){
        $count = 0;
        for($x=0; $x<sizeof($nums); $x++){
            if($nums[$i] == $nums[$x]){
                $count++;
            }
        }
        if($count > 1){
            $isDuplicate = true;
        }
    }
    if($isDuplicate){
        echo "Yes, there is a duplicate.";
    } else{
        echo "No duplicates in the array.";
    }
?>
<br>
<?php 
    // Task three
    $nums = array(1, 2, 3, 4, 5);
    $adjDuplicate = false;
    for($i=0; $i<sizeof($nums); $i++){
        if($nums[$i] == $nums[$i+1]){
            $adjDuplicate = true;
        }
    }
    if($adjDuplicate){
        echo "Yes, there are adjacent duplicates.";
    } else{
        echo "No adjacent duplicates in the array.";
    }
?>
<br>
<?php 
    // Task four
    $nums = array(1, 1, 1, 2, 2, 3, 3, 4, 5);
    $freq = array();
    $dups = 0;
    for($i = 0; $i < sizeof($nums); $i++){
        if(isset($freq[$nums[$i]])){
            $freq[$nums[$i]]++;
            if($freq[$nums[$i]] == 2){
                $dups++;
            }
        } else{
            $freq[$nums[$i]] = 1;
        }
    }
    echo $dups;
?>
<br>
<?php 
    // Task five
    $nums = array(1, 2, 3, 3, 2, 1);
    $isDrome = false;
    for($i=0; $i<sizeof($nums); $i++){
        if($nums[$i] == $nums[sizeof($nums) - 1 - $i]){
            $isDrome = true;
        }else{
            $isDrome = false;
            break;
        }
    }
    if($isDrome){
        echo "Yes, it is a palindrome!";
    } else{
        echo "Not a palindrome!";
    }
?>