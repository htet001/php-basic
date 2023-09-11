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

function deleteData($name) {
    $qry = "DELETE FROM user WHERE name='$name'";
    $db = dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result ? "Deleted" : "Delete Fail";
}

deleteData("bruno");