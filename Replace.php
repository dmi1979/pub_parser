<?php

function Replace($string){
    global $pattern_replacement;
    
    foreach ($pattern_replacement as $pattern =>$replacement){
        $string=preg_replace($pattern,$replacement,$string);
    }
    
    return $string;
}