<?php


function CreateStatFile($abbr){
    global $working_directory,$working_files,$pub_location,$stat_location;
    global $abbr_year;
    $string2stat_file='';
    $created_stat_file=false;
    $names=scandir($pub_location.$abbr_year[$abbr].'/'.urlencode($abbr)."/");
//         echo $stat_location.$abbr_year[$abbr].'/'.urlencode($abbr);
//     exit;
        
echo "files:";
//  print_r($names); 
//   $key;
//   foreach ($names as $key =>$name){
  for  ($key = 2;$key<count($names);$key++){
    $name=$names[$key];
    
    
    
     
    $html=file_get_contents($pub_location.$abbr_year[$abbr].'/'.urlencode($abbr)."/".$name);
//     echo $pub_location.$abbr_year[$abbr].'/'.urlencode($abbr)."/".$name;
    $string2stat_file=$string2stat_file.Parser($html,$name);
  }
//     echo "***$string2stat_file***";
//     exit;
    $dir_exists=CreateDir($stat_location.$abbr_year[$abbr].'/');
    
    
//     $dir_exists=CreateDir($stat_location.$abbr_year[$abbr].'/'.$abbr);
//     echo "*$stat_location/$abbr_year[$abbr]".'/'.$abbr.'/'.$string2stat_file."*";
   if($string2stat_file!==''){
//         echo $stat_location.$abbr_year[$abbr].'/'.$abbr,$string2stat_file;
        
//    echo "nnnnnnnnnnnnnn";exit;
        file_put_contents($stat_location.$abbr_year[$abbr].'/'.urlencode($abbr),$string2stat_file);
        $created_stat_file=true;
   } else echo "can't create stat for $abbr";
   
   
   return $created_stat_file;
}