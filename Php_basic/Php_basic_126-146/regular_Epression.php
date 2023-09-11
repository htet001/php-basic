<?php

$var = "HELLO WORLD MYANMAR";

$bol = preg_match("/GN/",$var); // ^ start word
                                // $ end word

echo $bol ? "TRUE" : "FALSE";