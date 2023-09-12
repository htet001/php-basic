<?php

$str = "Morning is 6:10 AM and evening is 17:20 PM";

preg_match_all("/(\d+:\d+)\s*(AM|PM)/",$str,$mat,PREG_SET_ORDER);

echo "<pre>".print_r($mat,true)."</pre>";

echo "<hr>";

preg_match_all("/(\d+:\d+)\s*(AM|PM)/",$str,$mat,PREG_PATTERN_ORDER);

echo "<pre>".print_r($mat,true)."</pre>";