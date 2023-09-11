<?php
define("DB_HOST","localhost");
define("DB_NAME","testphp");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()>0)
        die("Connection Fail");
    else
        return $db;
    
}

function passgen($pass) {
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}

function insertData($qry) {
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result > 0 ? "Bravo ::::: Data Insert Successfully!!!" : "Try Again ::::: Data Insert Fail";
}

function insertUniqueData($name,$email,$pass) {
    $qry = "SELECT * FROM user WHERE name='$name'";
    $db = dbConnect();
    $ret = mysqli_query($db,$qry);

    if (mysqli_num_rows($ret)>0){
        echo "Username is already taken";
    }else{
        $qry = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$pass')";
        $result = mysqli_query($db,$qry);
        echo $result > 0 ? "Data insert Successfully" : "Data insert Fail";
    }
}

function multiInsertData($qry){
    $db = dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result ? "Bravo ::::: Data Insert Successfully!!!" : "Try Again ::::: Data Insert Fail";
}

// function debug($data){
//     echo "<pre>".print_r($data,true)."</pre>";
// }


$pass = passgen(246);

//$qry ="INSERT INTO user VALUES (0,'bruno','bruno@gmail.com','$pass')";
//insertUniqueData("mikey","mikey@gmail.com","222");

$qry = "INSERT INTO user VALUES (0,'draken','draken@gmailcom','$pass');";
$qry .= "INSERT INTO user VALUES (0,'take','take@gmailcom','$pass');";
$qry .= "INSERT INTO user VALUES (0,'michi','michi@gmailcom','$pass');";
$qry .= "INSERT INTO user VALUES (0,'hinata','hinata@gmailcom','$pass');";

multiInsertData($qry);