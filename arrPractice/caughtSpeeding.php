<!DOCTYPE html>
<html>
    <h2> caughtSpeeding function </h2>
    <title> PHP </title>
    <body>
        <?php        
            function caughtSpeeding($speed, $isBirthday){
                if($isBirthday){
                    if($speed<=65){
                        return 0;
                    } elseif($speed>65 && $speed<=85){
                        return 1;
                    } elseif($speed>85){
                        return 2;
                    }
                }
                if($speed<=60){
                    return 0;
                } elseif($speed>60 && $speed<=80){
                    return 1;
                } else{
                    return 2;
                }
            }
            $speed = 66;
            $isBirthday = true;
            echo caughtSpeeding($speed, $isBirthday);
        ?>
    </body>
</html>    
