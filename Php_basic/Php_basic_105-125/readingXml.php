<?php
// $data = simplexml_load_file("data.xml");
// print_r($data);
// foreach($data as $key=>$value){
//     echo $key."=>".$value."<br>";
// }

$xml =<<<START
<coder>
<name>Hsl</name>
<age>21</age>
<some>the</some>
</coder>
START;

$data = simplexml_load_string($xml);
print_r($data);