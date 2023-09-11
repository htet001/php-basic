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

// $qry = "CREATE TABLE IF NOT EXISTS users(
//     id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(225)  NOT NULL,
//     creator INT(10) NOT NULL,
//     email VARCHAR(225) NOT NULL,
//     password VARCHAR(225) NOT NULL, 
//     UNIQUE KEY email(email)
// );";


// $qry = "CREATE TABLE IF NOT EXISTS subjects(
//     id INT(10) NOT NULL AUTO_INCREMENT,
//     name VARCHAR(225)  NOT NULL,
//     PRIMARY KEY (id)
// );";


// $qry = "CREATE TABLE IF NOT EXISTS tutorials(
//     id INT(10) NOT NULL AUTO_INCREMENT,
//     subjectId INT(3) NOT NULL,
//     title VARCHAR(225) NOT NULL,
//     created_by INT(3) NOT NULL, 
//     PRIMARY KEY (id)
// );";

// $qry = "CREATE TABLE IF NOT EXISTS tutorial_view(
//     id INT(10) NOT NULL,
//     static_view INT(10) NOT NULL,
//     unique_view INT(10) NOT NULL, 
//     PRIMARY KEY (id)
// );";

// $result = mysqli_query(dbConnect(),$qry);
// echo $result ? "Created" : "Create Fail";


// $users = json_decode(file_get_contents("users.json"));
// foreach($users as $user){
//     $pass = passgen($user->password);
//     $qry = "INSERT INTO users VALUES ($user->id,'$user->name','$user->creator',
//     '$user->email','$pass')";

//     mysqli_query(dbConnect(),$qry);
// }

// $subjects = json_decode(file_get_contents("subjects.json"));
// foreach($subjects as $subject){
//     $qry = "INSERT INTO subjects (name) VALUES ('$subject->name')";

//     mysqli_query(dbConnect(),$qry);
// }

$qry = "SELECT * FROM subjects";
$db = dbConnect();
$result = mysqli_query($db,$qry);


$tutorials = json_decode(file_get_contents("tutorials.json"));
foreach($tutorials as $tutorial){
    $qry = "SELECT * FROM subjects WHERE id=$tutorial->subject_id";
    $result = mysqli_query($db,$qry);
    $name="";

    foreach ($result as $row) {
        $name = $row['name'];
    }

    $subjectid=$tutorial->subject_id;
    $creator=$tutorial->creator_id;
    $t=0;
    for( $i= $tutorial->start_id; $i <= $tutorial->end_id; $i++ ){
        $title = $name ." ". ++$t;
        $qry = "INSERT INTO tutorials (subjectId,title,created_by) VALUES
        ($subjectid,'$title',$creator)";
        mysqli_query($db,$qry);
    }
}


// $qryview = "SELECT * FROM tutorials";
// $ans = mysqli_query($db,$qryview);
// foreach($ans as $item){
//     $id = $item["id"];
//     $static_view =mt_rand(1000,1000000);
//     $unique_view =mt_rand(100,10000);

//     $qry = "INSERT INTO tutorial_view VALUES ($id,$static_view,$unique_view)";
//     mysqli_query($db,$qry);
// }