
<?php
$str = "This is a book";

// $ans = preg_split("/[\s]/",$str,PREG_SPLIT_NO_EMPTY);
$ans = preg_split("//",$str,5,PREG_SPLIT_OFFSET_CAPTURE);
//$ans = preg_split("//",$str,5,PREG_SPLIT_DELIM_CAPTURE);



echo "<pre>".print_r($ans,true)."</pre>";