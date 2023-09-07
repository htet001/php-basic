<?php
function mycookie(){
    //setcookie('name','value','time','path','domain','security');
    setcookie('HSL','company',time() + 3600,'/','',0);
}
//mycookie();

function mygetcookie(){
    if(isset($_COOKIE['HSL'])){
        echo $_COOKIE['HSL'];
    }else{
        echo"there is no cookie";
    }
   
}
mygetcookie();


// function mydeletecookie(){
//     //setcookie('name','value','time','path','domain','security');
//     setcookie('HSL','',time() - 3600,'/','',0);
// }
// mydeletecookie();
?>