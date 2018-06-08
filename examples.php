<?php
$string1 = "php is my first language";


$check = preg_match('/php/', $string1);//is php exist in this variable?//true
$check = preg_match('/PHP/', $string1);//is PHP exist in this variable?//false//because this is sensive for upper and lower case
$check = preg_match('/PHP/i', $string1);//is PHP exist in this variable?//true//because this is insensive for upper and lower case with i at the end

$string2 = '557889158997';
$check = preg_match('/915/', $string2);//true

$string3 = 'fijewophpfijewoj';
$check = preg_match('/p.p/', $string3);//true// a word with 3 characters that first character p and last character p and in between would be any thing (every dot is one character)

$string4 = 'fijewophpfijewoj';
$check = preg_match('/p...p/', $string4);//false

$string5 = 'php is my first language';
$check = preg_match('/^php/', $string5);//true//^ this is hat character and mean nothing

$string6 = 'first of all php is my first language';
$check = preg_match('/^php/', $string6);//false//^ this is hat character and mean is this begin of sentense

$string7 = 'php is my first language';
$check = preg_match('/^p/', $string7);//true//

$string8 = 'php is my first language';
$check = preg_match('/language$/', $string8);//true//is this end of sentense?

$string9 = 'php is my first language';
$check = preg_match('/age$/', $string9);//true//is this end of sentense?

$string11 = 'aaa';
$check = preg_match('/^a{1,3}$/', $string11);//true//begin with a and the end with a and that sentense have 1 or 2 or 3 or 4 a

$string12 = 'php cis my first language';
$check = preg_match('/[fo]c*/', $string12);//true//f or o in sentense and c doesn't matter exist in sentense or not

$string13 = 'php is my first language';
$check = preg_match('/[fz]c*/', $string13);//false

$string14 = '.php is my first language';
$check = preg_match('/^\./', $string14);//true

$string15 = 'php is my first language';
$check = preg_match('/^[a-z]/', $string15);//true//a till z character for start sentense

$string16 = 'php is my first language';
$check = preg_match('/^[a-f]/', $string16);//false

$string17 = 'php is my first language';
$check = preg_match('/^[a-z]{3}/', $string17);//true//a till z character and must be 3 character form a to z

$string10 = 'php is my first language';
$check = preg_match('/^php language$/', $string10);//false

$string18 = 'php  is my first  language';
$check = preg_match('/^php.*language$/', $string18);//true

$string19 = 'ali.b.120';
$check = preg_match('/^[a-z]{3}\.[abc]+\.[0-9]/', $string19);//true

$string20 = 'london is my favorate country';
$check = preg_match('/london|poland/', $string20);//true // have london or poland in this sentense?

$string21 = 'tel: +1';
$check = preg_match('/^tel: \+\d+/', $string21);//true // \d just accept number
$check = preg_match('/^tel: \+(\d+)/', $string21);//true // \d just accept number

$string22 = 'tel: +85w96';
$check = preg_match('/^tel: \+\d*(\D+)\d*/', $string22);//true // \D just accept not number

$string23 = 'h.mosaferkocholo@gmail.com';
$check = preg_match('/^\w\S*@\S+\.[a-z]{2,3}/', $string23);//true // \w just accept a-z, A-Z, 0-9

// . = any char
// \. = the actual dot character
// .? = .{0,1} = match any char zero or one times
// .* = .{0,} = match any char zero or more times
// .+ = .{1,} = match any char one or more times
// \s matches any white-space character
// \S matches any non-white-space character
// \W Find a non-word character
// \n	Find a new line character
// n zero or 1 n
// ?=n	Matches any string that is followed by a specific string n
// ?!n	Matches any string that is not followed by a specific string n
// ! this is except
if($check == 1){
    echo "<h1>true</h1>";
}else{
    echo '<h1>false</h1>';
}