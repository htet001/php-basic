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

function updateData($qry) {

    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "Updated" : "Update Fail";
}
$qry = "UPDATE user SET name='may' WHERE name='take'";
updateData($qry);



$qry = "CREATE TABLE subject01(
    id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) UNIQUE NOT NULL,
    created_at date,
    updated_at date 
);";

    $result = mysqli_query(dbConnect(),$qry);
    echo $result ? "Created" : "Create Fail";

