<?php
define("DB_HOST","localhost");
define("DB_NAME","testphp");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   
};

function debug($data){
    echo "<pre>".print_r($data,true)."</pre>";
}
dbConnect();
