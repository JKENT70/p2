<?php

$pword;
$words = file('wordlist.txt');

if(isset($_POST['submit']) ) {
    $numwords = htmlentities($_POST['count']);
    $usesym = htmlentities($_POST['symbol']);
    $usenumb = htmlentities($_POST['number']);
    $useupper = htmlentities($_POST['uppercase']);
    
    $symbols = array('!','@','#','$','%','^','&','*');
    $sym = $symbols[rand(0, 7)];

    $num = rand(1,9);
    
    for ($i=0; $i<=$numwords-1; $i++) {
    $rand[$i] = rand(1, 138);
    $wordnum[$i] = $words[$rand[$i]];
    $pword = $pword . $wordnum[$i];
    } 
    
    if ($useupper == 'y') {
        $pword = ucfirst($pword);   
    }

    if ($usesym == 'y') {
        $pword = $sym . $pword;
    }
    
    if ($usenumb == 'y') {
        $pword = $num . $pword;
    }
    
}



