<?php

session_start();
include "links.php";
echo"<br>";
echo "Home page";


if(isset($_POST['submit'])){
    $user = $_POST['name'];
    $pass = $_POST['pass'];

    if($user=="hsl" && $pass == 123){
        $_SESSION['username']=$user;
        $_SESSION['password']=$pass;

        header("Location:member.php") ;
    }else{
        echo "you are invilid";
    }
}
?>
<form action="<?php $_PHP_SELF ?>" method="post">
<input type="name" name="name"><br><br>
<input type="password" name="pass"><br><br>
<button type="submit" name="submit">Log in</button>
</form>
