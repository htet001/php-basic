<?php
// if(isset($_POST['submit'])){
//     //print_r($_FILES['file']) ;
//     echo $_FILES ['file']['tmp_name'] . "<br>";
//     echo $_FILES ['file']['name'] . "<br>";
//     echo $_FILES ['file']['size'] . "<br>";
//     echo $_FILES ['file']['type'];

//     move_uploaded_file($_FILES ['file']['tmp_name'],'uploads/' . $_FILES ['file']['name']);
    
// }


//echo $_SERVER["PHP_SELF"];

if(isset($_POST['submitbutton'])){
    //print_r($_FILES['files']);
    foreach($_FILES['files']['tmp_name'] as $key => $value){
        echo $_FILES['files']['name'][$key] . "<br>";
        echo $_FILES['files']['tmp_name'][$key] . "<br>";
        echo $_FILES['files']['size'][$key] . "<br>";
        echo $_FILES['files']['type'][$key] . "<br>";
    }
move_uploaded_file($_FILES ['files']['tmp_name'][$key],'uploads/' . $_FILES ['files']['name'][$key]);

}
?>
<!-- <form action="<?php $_PHP_SELF ?>"  method="post" enctype="multipart/form-data">

    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button> <br><br><br><br>

</form> -->

<form action="<?php $_PHP_SELF ?>"  method="post" enctype="multipart/form-data">

    <input type="file" name="files[]" multiple>
    <button type="submit" name="submitbutton">Upload</button> <br><br><br><br>

</form>