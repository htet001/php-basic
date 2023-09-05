<?php
/*for($i = 0 ; $i <= 20 ; $i++){
    if($i % 10 == 0 && $i > 0){
        echo "  $i is even number <br>";
    }else{
    echo "This number is $i <br>";
}
    }*/
    
    $num = 0;
    while($num<10){
        if($num==5){
            echo "The value is $num <br>";
            //break;
            $num++;
            continue;
        }
        echo "The value is $num <br>";
        $num++;
    }

?>