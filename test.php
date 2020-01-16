<?php 
$pattern='#yui|asd#';
$string="wertyuiasdfghjklqawertyui";
preg_match_all($pattern,$string,$matches);
print_r($matches);
exit;


$string="dkfjkdjfk\xe2\x80\x8byuioi uyduyiu\xe2\x81\xa0";
file_put_contents('matches_string',"$string\n");
$pattern='#(\xe2\x80\x8b)|(\xe2\x81\xa0)|\s#xu';
$pattern='#\p{Cn}#u';
$pattern='#\p{Zs}#x';
$pattern='#\p{Z}#x';
$pattern='#\p{Z}#x';
$pattern='#\p{Z}#x';
$pattern='#\p{Cf}#';
$pattern='#\p{Po}#u';

$pattern='#\p{Z}#x';

preg_match_all($pattern,$string,$matches);
print_r($matches);

$matches_string=implode(' ',$matches[0]);
file_put_contents('matches_string',$matches_string,FILE_APPEND);
