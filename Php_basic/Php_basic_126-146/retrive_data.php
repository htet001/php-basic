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

function excuteQuery($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    if (mysqli_num_rows($result) > 0) {
        foreach($result as $item){
            echo "ID is ==>". $item["id"]."<br>";
            echo "Name is ==>". $item["name"]."<br>";
            echo "Email is ==>". $item["email"]."<br>";
            echo "Password is ==>". $item["password"]."<br>";
            echo "<hr>";
        }
    }
    
}

function retrieveSingleData($id) {
    //$qry = "SELECT * FROM user WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$id);

    if (mysqli_num_rows($result) > 0) {
        foreach($result as $item){
            echo "ID is ==>". $item["id"]."<br>";
            echo "Name is ==>". $item["name"]."<br>";
            echo "Email is ==>". $item["email"]."<br>";
            echo "Password is ==>". $item["password"]."<br>";
            echo "<hr>";
        }
    }
}

function debug($data){
    echo "<pre>".print_r($data,true)."</pre>";
}

function reteriveWhileloop($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    if(mysqli_num_rows($result)> 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "ID is ==>". $row["id"]."<br>";
            echo "Name is ==>". $row["name"]."<br>";
            echo "Email is ==>". $row["email"]."<br>";
            echo "Password is ==>". $row["password"]."<br>";
            echo "<hr>";
        }
    }
}

// $qry = "SELECT * FROM user LIMIT 2,6";
// excuteQuery($qry);


// $qry = "SELECT * FROM user WHERE id=4";
// retrieveSingleData($qry);


$qry = "SELECT * FROM user WHERE id > 9 ";
reteriveWhileloop($qry);