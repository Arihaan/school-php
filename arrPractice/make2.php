<!DOCTYPE html>
<html>
    <h2> make2 function </h2>
    <title> PHP </title>
    <body>
        The new array: [
        <?php        
            function make2($arr1, $arr2){
                if (sizeOf($arr1) == 5){
                    $newArr = $arr1;
                } elseif (sizeOf($arr1)>5){
                    for($i=0; $i<5; $i++){
                        $newArr[$i] = $arr1[$i];
                    }
                } elseif (sizeOf($arr1)<5){
                    for($i=0; $i<sizeOf($arr1); $i++){
                        $newArr[$i] = $arr1[$i];
                    }
                    for($x=0; $x<5-sizeOf($arr1); $x++){
                        $newArr[sizeOf($arr1)+$x] = $arr2[$x];
                    }
                }
                foreach($newArr as $value){
                    echo "$value, ";
                }
            }
            $testArr = array(1, 2, 3, 4, 5, 6, 5);
            $testArr2 = array(6, 7, 8, 9, 10);  
            make2($testArr, $testArr2);              
        ?>
        ]
    </body>
</html>    
