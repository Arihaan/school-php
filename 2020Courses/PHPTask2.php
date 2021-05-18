<!DOCTYPE = html>
<html lang = "en">
    <head>
        <title>Pre-Mini IA</title>
    </head>
    <body align = "center">
        <h1>PHP Task 2: Pre-mini IA</h1>
        <h3>Athletes Information:</h3>

        <?php
            // Five parallel Arrays
            $idnums = array();
            for($i=100; $i<=130; $i++){
                $idnums[$i - 100] = $i;
            }

            $names = array("Allyson", "Claretha", "Austin", "Nola", "Lloyd", "Margrett", "Shantelle", "Augustina",
            "Darnell", "Helen", "Phoebe", "Vernia", "Dayna", "Claris", "Drema", "Monika", "Gaynelle", "Nydia", "Malvina", "Jad",
            "Roselia", "Tanner", "Torrie", "Shirleen", "Vernita", "Kathline", "Austin", "Stasia", "Kennith", "Cordell", "Hermelinda");

            $sports = array(["Basketball"], ["Football"], ["Volleyball"], ["Basketball", "Football"], ["Volleyball"], ["Basketball"], ["Basketball"],
            ["Volleyball"], ["Football"], ["Football"], ["Volleyball"], ["Volleyball", "Basketball"], ["Basketball"], ["Football"], ["Basketball"],
            ["Football", "Basketball"], ["Volleyball"], ["Volleyball"], ["Football"], ["Basketball"], ["Basketball"], ["Football"], ["Volleyball", "Football"], 
            ["Volleyball"], ["Football", "Volleyball"], ["Football"], ["Basketball"], ["Football"], ["Basketball"], ["Basketball"], ["Volleyball"]);            
            
            $votes = array(2, 0, 0, 1, 2, 7, 0, 0, 1, 1, 0, 0, 2, 7, 0, 0, 1, 0, 0, 0, 0, 3, 1, 0, 0, 1, 0, 0, 1, 0, 0);

            $gpa = array(3.98, 3.41, 4.01, 3.62, 3.02, 2.64, 3.06, 3.53, 3.76, 2.94, 3.16, 3.31, 3.80, 3.43, 3.18, 3.30, 3.80, 3.47, 3.19, 2.60, 2.98, 3.46, 3.04, 3.21, 2.90, 2.90, 3.76, 2.85, 3.92, 3.87, 2.88);

            // Table for Athlete Information
            echo '
            <style> table, th, td {
                border: 1px solid black;
            }</style>
    
            <table align="center">
                <thead>
                    <tr>
                        <th colspan="5">Athletes</th>
                    </tr>
                </thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sports</th>
                    <th>Votes</th>
                    <th>GPA</th>
                </tr>
            ';
            for($i = 0; $i <= sizeof($idnums)-1; $i++){
                if(sizeof($sports[$i]) == 2){
                    $sportTemp = $sports[$i][0].", ".$sports[$i][1];
                } else {
                    $sportTemp = $sports[$i][0];
                }
                echo '
                    <tr>
                        <td align="center">'.$idnums[$i].'</td>
                        <td align="center">'.$names[$i].'</td>
                        <td align="center">'.$sportTemp.'</td>
                        <td align="center">'.$votes[$i].'</td>
                        <td align="center">'.$gpa[$i].'</td>
                    </tr>
                ';
            }            
            echo "</table><br>";

            // Looping through sports to count athletes per sport
            echo "<h3>Athletes per sport:</h3>";
            $basketball = 0;
            $volleyball = 0;
            $football = 0;
            foreach($sports as $persport){
                if(sizeof($persport) > 1){
                    if(in_array("Basketball", $persport) && in_array("Football", $persport)){
                        $basketball++;
                        $football++;
                    } else if(in_array("Basketball", $persport) && in_array("Volleyball", $persport)){
                        $basketball++;
                        $volleyball++;
                    } else {
                        $volleyball++;
                        $football++;
                    }
                } else{
                    if(in_array("Basketball", $persport)){
                        $basketball++;
                    } else if(in_array("Volleyball", $persport)){
                        $volleyball++;
                    } else if(in_array("Football", $persport)){
                        $football++;
                    }
                }
            }
            echo "Basketball: $basketball <br> Football: $football <br> Volleyball: $volleyball <br>";
            
            // Going through 2 arrays for top vote getter per sport
            echo "<h3>Top Voted per Sport:</h3>";
            $bballVotes = 0;
            $fballVotes = 0;
            $vballVotes = 0;
            for($i=0; $i < sizeof($idnums); $i++){
                if(in_array("Basketball", $sports[$i])){
                    if($votes[$i] > $bballVotes){
                        $bballWinner = $names[$i];
                        $bballVotes = $votes[$i];
                    } else if($votes[$i] == $bballVotes){
                        $bballWinner = $bballWinner." and ".$names[$i];
                    }
                } else if(in_array("Football", $sports[$i])){
                    if($votes[$i] > $fballVotes){
                        $fballWinner = $names[$i];
                        $fballVotes = $votes[$i];
                    } else if($votes[$i] == $fballVotes){
                        $fballWinner = $fballWinner." and ".$names[$i];
                    }
                } else if(in_array("Volleyball", $sports[$i])){
                    if($votes[$i] > $vballVotes){
                        $vballWinner = $names[$i];
                        $vballVotes = $votes[$i];
                    } else if($votes[$i] == $vballVotes){
                        $vballWinner = $vballWinner." and ".$names[$i];
                    }
                }
            }
            echo "Basketball: $bballWinner <br> Football: $fballWinner <br> Volleyball: $vballWinner <br>";

            // Finding student athlete of the year
            echo "<h3>Student Athlete of the Year:</h3>";
            foreach($gpa as $stuGPA){
                $sumGPA += $stuGPA;
            }
            $avgGPA = round($sumGPA/sizeof($gpa), 2);
            for($i = 0; $i < sizeof($sports); $i++){
                if(sizeof($sports[$i]) > 1){
                    if($gpa[$i] > $avgGPA && $gpa[$i] > $satyGPA){
                        $saty = $names[$i];
                        $satyGPA = $gpa[$i];
                    }
                }
            }
            echo "The student athlete of the year is $saty!!";

            // Honorable mentions based on votes and GPA
            echo "<h3>Honorable mentions in each sport:</h3>";
            $bballVotes = 0;
            $fballVotes = 0;
            $vballVotes = 0;
            for($i=0; $i < sizeof($idnums); $i++){
                if(in_array("Basketball", $sports[$i])){
                    if($votes[$i] > $bballVotes && $names[$i] != $bballWinner){
                        $bballHM = $names[$i];
                        $bballVotes = $votes[$i];
                        $bballHMgpa = $gpa[$i];
                    } else if($votes[$i] == $bballVotes){
                        if($gpa[$i] > $bballHMgpa){
                            $bballHM = $names[$i];
                        }
                    }
                } else if(in_array("Football", $sports[$i])){
                    if($votes[$i] > $fballVotes && $names[$i] != $fballWinner){
                        $fballHM = $names[$i];
                        $fballVotes = $votes[$i];
                    } else if($votes[$i] == $fballVotes){
                        if($gpa[$i] > $fballHMgpa){
                            $fballHM = $names[$i];
                        }
                    }
                } else if(in_array("Volleyball", $sports[$i])){
                    if($votes[$i] > $vballVotes && $names[$i] != $vballWinner){
                        $vballHM = $names[$i];
                        $vballVotes = $votes[$i];
                    } else if($votes[$i] == $vballVotes){
                        if($gpa[$i] > $vballHMgpa){
                            $vballHM = $names[$i];
                        }
                    }
                }
            }
            echo "Basketball: $bballHM <br> Football: $fballHM <br> Volleyball: $vballHM <br>";
        ?>
    </body>
</html>