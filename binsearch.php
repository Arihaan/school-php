<!DOCTYPE html>
<html>
    <h2> Binary Search </h2>
    <title> Searching Algo </title>
    <body>
        <?php        
            function binsearch($num){
                $bin_array = array(1, 12, 22, 37, 39, 98);
                $maxIndex = count($bin_array) - 1;
                $minIndex = 0;

                while($minIndex <= $maxIndex){
                    $mid = floor(($minIndex + $maxIndex)/2);
                    if($num == $bin_array[$mid]){
                        return "Found!";
                    }
                    if($num < $bin_array[$mid]){
                        $maxIndex = $mid - 1;
                    } else{
                        $minIndex = $mid + 1;
                    }
                }
                return "Not found!";                
            }
            echo binsearch(98);
           
        ?>
    </body>
</html>    