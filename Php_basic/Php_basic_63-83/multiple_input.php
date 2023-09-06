<?php
if(isset($_POST["submit"])){
    $myname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    echo $myname . "==" . $email . "==" . $pass ."<br>";

    $gender = $_POST['gender'];
    echo $gender ."<br>";

    $subjects = $_POST['subjects'];
    foreach($subjects as $sub){
       echo $sub ."<br>";
    }

        foreach($_FILES['files']['tmp_name'] as $key => $value){

    move_uploaded_file($_FILES ['files']['tmp_name'][$key],
    'uploads/' . $_FILES ['files']['name'][$key]);
    
    }
}
?>
<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
<input type="text" name="username" placeholder="Username"><br><br>
<input type="text" name="email" placeholder="Email"><br><br>
<input type="text" name="password" placeholder="Password"><br><br>

<h5>Choose your gender</h5>

<input type="radio" name="gender" value="Male">:Male<br><br>
<input type="radio" name="gender" value="Female">:Female<br><br>

<h5>Choose your subject</h5>

<input type="checkbox" name="subjects[]" value="Myanmar <br>">:Myanmar<br>
<input type="checkbox" name="subjects[]" value="English <br>">English<br>
<input type="checkbox" name="subjects[]" value="Maths <br>">:Maths<br>
<input type="checkbox" name="subjects[]" value="Chemistry">:Chemistry<br><br><br><br>

<input type="file" name="files[]" multiple>

<button type="submit" name="submit">Register</button>
</form>