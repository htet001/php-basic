<?php
 //die("does not work");
$file = "number.txt";
try{
    if(file_exists($file)){
        echo "File Exists";
    }else{
        throw new Exception("File does not Exist");
    }
}
catch(Exception $e){
    echo $e->getMessage();
}

//exit ("" );
error_reporting(0);
$file = "numbe.txt";
fopen($file,"r");