<?php
require 'books.php';
require 'arrays.php';
require 'CreateStatFile.php';
require 'Replace.php';
require 'data.php';



// CreateStatFile()



// exit;


// echo $string;
// file_put_contents('string_input',$string,FILE_APPEND);

function ExtractLinks($html){
        $array=array();
//       $pattern = '#class="b">(?<bible_links>.*?)</a>#su';
        $html = strtolower($html);
       $pattern = '#class="b">(?<bible_links>(.*?))</a>#su';        //TODO remove any tag inside <a> </a>      
        preg_match_all($pattern, $html, $results);
//         $string='|'.implode ('|',$results['bible_links'])."|";
        $string=implode (' ',$results['bible_links']);
        $string=preg_replace('#[ ]{2,}#u',' ',$string);
        print_r($results['bible_links']);
// echo $string;
        
//         return $results;
        return $string;
        
}

// file_put_contents('string_input',"$string\n$link");



// echo $pattern_book;
$pub_url='/media/dmi/1c336c7c-8406-4fb3-b424-579f3727a993/pro/1959/w59+1%2F1/1959527';
$pub_url='/media/dmi/1c336c7c-8406-4fb3-b424-579f3727a993/pro/1970/w70+1%2F1/1970801';
$pub_url='/media/dmi/1c336c7c-8406-4fb3-b424-579f3727a993/pro/1978/w78+1%2F1/1978849';


$html=file_get_contents($pub_url);

$string=Replace($html);
$string=ExtractLinks($string);
$string=str_replace(array_keys($str_repl),array_values($str_repl),$string);
// print_r($bible_links);
file_put_contents('link_string',"$string\n$link");
// echo "\n$pattern_book";
echo"\n_________________________\n";
// $string="matt. 7:13, 14 prov. 4:18, 19 hebrews 11:10; 13:14 acts 9:2; 19:9, 23; 22:4 matthew 7:8; luke 13:24 matt. 7:15 psalms 78:52; 80:1; 100:3 john 10:11 matt. 23:2 matt. 23:13-15; luke 6:39 matt. 23:27, 28 matt. 7:16-19 psalm 58:9; ecclesiastes 7:6; isaiah 44:14-16; matthew 6:30; 13:30 matt. 7:20 luke 6:45 mark 7:21-23 mt 23err29";
echo $string;

$string=preg_replace_callback(
    '#'.'(?<book>'.$pattern_book.')#',
    function($books) use($flipped1){
        return "b".$flipped1[trim($books['book'])].' ';
    }
    ,$string);//replace bible books to numbers
$string=preg_replace('#\s{2,}#',' ',$string);    

preg_match_all($link,$string,$books,PREG_SET_ORDER);
print_r ($books);

    
// print_r ($books[0]);
// var_dump($books);
echo $string;