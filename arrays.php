<?php

$str_repl=array(
//     ' ','_', 
    "\xe2\x80\x8b" =>' ', //unicode spaces
    "\xe2\x81\xa0" =>' ', // unicode spaces
    '' =>'');
    
    
$alias_expr=array(
    '%%'=>'');
    
$pattern_replacement=array(
    '#</?(strong|sup|em|span)>#'=>'',
    '#(\d)\s*,\s*:\s*(\d)#'=>'\1err\2',
    '#[-—–−—]#u'=>'- ',
    '#[.,;]#'=>' ',
    '#(\d[:])#'=>'\1 ',
    '#(\d)\s[:]#u'=>'\1: ',
    '#\s{2,}#su'=>' ');


    
    
    
    $pattern_book=//'ge\s|'.
    implode ('|',array_keys($book));
    $chvs='(?<chvs>.*?)';
    $c='\d{1,3}\s*[:]';
    $v='\d{1,3}';
    $chvs='(?<chvs>\s*(?<chapter>\d{1,3}\:)\s*(?<verses>\d{1,3}.*?))';
    $chvs='(?<chvs>\s*(?<chapter>'.$c.')\s*(?<verses>'.$v.'([-,.0-9[:space:]])*?))';
    
//_______________________________________________       
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$b="b(?<book>(\d{1,2}) )";
$v='(\d{1,3})(\s?)*';
$chapter='(?<chapter>(\d{1,3})\: )';
$verses="($v\s?-\s$v|$v\s?)*"; 

$link="#$b($chapter$verses|$chapter$v|$verses|$v)+#u";


        
        

echo $link;