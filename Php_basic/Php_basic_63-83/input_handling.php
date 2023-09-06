
<?php

/*if(isset($_GET['Submit'])){
    //echo "<p style = 'color:tomato'>This name is already haven!!</p>";
    $newname = $_GET['Username'];
    echo"Your username is <span style='color:tomato'>" . $newname . "</span>";

}*/
//if link add, aciton"file name" 

//checked ===> default value



if(isset($_POST['Submit'])){

    
    $name = $_POST['Username'];
    $pass = $_POST['password'];

    echo "Your name is " . $name ." and your password is " . $pass;
}


if(isset($_POST['check_color'])){
    if(isset($_POST['color'])){
        $colors = $_POST['color'];
    if(count($colors) > 0) {
        foreach($colors as $color) {
            echo $color . "<br>";
        }
    }
    }  
}



if(isset($_POST['choose'])){
    $give = $_POST['result'];

    echo "Your answer is " . $give;
}





?>

<form action="<?php $_PHP_SELF ?>"  method="post">
    <input type="text" name="Username" placeholder="Enter your name"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <input type="submit" name="Submit"><br><br><br><br>

    <input type="checkbox" name="color[]" value="red">: Red <br><br>
    <input type="checkbox" name="color[]" value="orange"> : Orange <br><br>
    <input type="checkbox" name="color[]" value="blue" > : Blue <br><br>
    <input type="checkbox" name="color[]" value="yellow"> : Yellow <br><br>
    <input type="checkbox" name="color[]" value="green"> : Green <br><br>
    <button type="submit" name="check_color">Check color</button> <br><br><br><br>


    <input type="radio" name="result" value="TRUE"> : TRUE <br><br>
    <input type="radio" name="result" value="FALSE"> : FALSE <br><br>
    <button type="submit" name="choose">Choose</button> <br><br><br><br>
    
    </form>


