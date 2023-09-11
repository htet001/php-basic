<?php
define("DB_HOST","localhost");
define("DB_NAME","best");
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

function debug($data){
    echo "<pre>".print_r($data,true)."</pre>";
}

$qry = "SELECT
            ur.name AS User_Name,
            ur.id As User_id,
            COUNT(tuto.id) AS Total_Tutorial,
            (
                CASE WHEN
                    COUNT(tuto.id) <=400
                THEN
                    'Sayargyi'
                ELSE
                    'Genious'
                END  
            )AS Teacher_type,
            SUM(tv.static_view) AS Total_Static_View,
            SUM(tv.unique_view) AS Total_Unique_View,
            sub.name AS Subject
        FROM
            users AS ur
        JOIN
            tutorials AS tuto       
        ON
            ur.id=tuto.created_by
        JOIN 
            tutorial_view AS tv
        ON
            tuto.id=tv.id
        JOIN 
            subjects AS sub
        ON
            tuto.subjectId = sub.id
        WHERE
            ur.creator=1
        GROUP BY
            sub.id;      
";
$result = mysqli_query(dbConnect(),$qry);
foreach($result as $values){
    debug($values);
}