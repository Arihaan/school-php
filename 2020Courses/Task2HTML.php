<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>HTML Task 2</title>
    </head>
    <body align="center">
        <h1>HTML Task 2: HTML and PHP</h1>
        <hr><hr>

        <!--First mini task-->

        <h2>Login:</h2>
        <form action="Task2HTML.php" method="POST"> 
            Username:  <input type="text" name="user">
            <br><br>
            Password:  <input type="password" name="pass">
            <br><br>
            <input type="submit"> 
        </form>
        <br>
        <?php 
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            if($user == "admin" && $pass == "12345"){
                echo "Logged in!";
            } elseif(empty($user) || empty($pass)){
                echo "Please enter credentials.";
            } else{
                echo "Incorrect credentials!";
            }
        ?>
        <hr>

        <!--Second mini task-->

        <h2>Favorite Ice Cream:</h2>
        <form action="Task2HTML.php" method="POST"> 
            Name:  <input type="text" name="name">
            <br><br>
            Favorite ice-cream flavor: 
            <select id="flavor" name="flavor">
                <option value="chocolate">Chocolate</option>
                <option value="vanilla">Vanilla</option>
                <option value="strawberry">Strawberry</option>
                <option value="butterscotch">Butterscotch</option>
            </select>
            <input type="submit"> 
        </form>
        <br>
        <?php 
            $name = $_POST["name"];
            $icecream = $_POST["flavor"];
            if(empty($name) || empty($icecream)){
                echo "Please enter name and favorite ice-cream flavor.";
            } else{
            echo "$name loves $icecream ice-cream!"; 
            }           
        ?>
        <hr>

        <!--Third mini task-->

        <h2>User subjects:</h2>
        <form action="Task2HTML.php" method="POST">
            Subject 1: <input type="text" name="sub1"><br><br>
            Subject 2: <input type="text" name="sub2"><br><br>
            Subject 3: <input type="text" name="sub3"><br><br>
            Subject 4: <input type="text" name="sub4"><br><br>
            Subject 5: <input type="text" name="sub5"><br><br>
            <input type="submit">
        </form>
        <br>
        <?php
            $sub1 = $_POST["sub1"];
            $sub2 = $_POST["sub2"];
            $sub3 = $_POST["sub3"];
            $sub4 = $_POST["sub4"];
            $sub5 = $_POST["sub5"];
            echo "
                <select>
                    <option>$sub1</option>
                    <option>$sub2</option>
                    <option>$sub3</option>
                    <option>$sub4</option>
                    <option>$sub5</option>
                </select>            
            ";
        ?>
    </body>
</html>