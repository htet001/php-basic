<?php
$ary=["htet@localhost,shine@localhost,linn@localhost"];
$to = implode(',',$ary);
$subject = "PHP Mail Test";

$message  =<<<ST
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <div style="width: 80%;background: #ddd;margin: 0 auto;">
        <h1 style="text-align: center;">Hello Myanmar</h1>
        <p>What is Thunderbird used for?
            Thunderbird is a free, open-source
            , cross-platform application for 
            managing email, news feeds, chat,
             and news groups. It is a local 
             email application, meaning it 
             installs and runs as a client
              on your device, being rather 
              than browser or web-based. 
              It is powerful yet easy-to-use through 
               its many features.</p>
    </div>
</body>
</html>

ST;

$header = "From: thuthu@gmail.com\r\n";
$header.= "Content-Type:Text/html";
mail($to,$subject,$message,$header);