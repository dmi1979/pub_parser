<?php 

$restored_name = array(0=>"no book",

1 => "Genesis", 'Exodus', 'Leviticus', 'Numbers', 'Deuteronomy', 'Joshua', 'Judges', 'Ruth', '1 Samuel', '2 Samuel', '1 Kings', '2 Kings', '1 Chronicles', '2 Chronicles', 'Ezra', 'Nehemiah', 'Esther', 'Job', 'Psalms', 'Proverbs', 'Ecclesiastes', 'Song of Solomon', 'Isaiah', 'Jeremiah', 'Lamentations', 'Ezekiel', 'Daniel', 'Hosea', 'Joel', 'Amos', 'Obadiah', 'Jonah', 'Micah', 'Nahum', 'Habakkuk', 'Zephaniah', 'Haggai', 'Zechariah', 'Malachi', 'Matthew', 'Mark', 'Luke', 'John', 'Acts', 'Romans', '1 Corinthians', '2 Corinthians', 'Galatians', 'Ephesians', 'Philippians', 'Colossians', '1 Thessalonians', '2 Thessalonians', '1 Timothy', '2 Timothy', 'Titus', 'Philemon', 'Hebrews', 'James', '1 Peter', '2 Peter', '1 John', '2 John', '3 John', 'Jude', 'Revelation');
// array_map($restored_name,strtolower($value));
foreach ($restored_name as $key=>$value){$handled_name[$key]=strtolower($value);}



$alt_names_abbrs=array(
1 => "Genesis", 'Exodus', 'Leviticus', 'Numbers', 'Deuteronomy', 'Joshua', 'Judges', 'Ruth', '1 Samuel', '2 Samuel', '1 Kings', '2 Kings', '1 Chro.', '2 Chro.', 'Ezra', 'Nehemiah', 'Esther', 'Job', 'Psalm', 'Proverbs', 'Ecclesiastes', 'Cant.', 'Isaiah', 'Jeremiah', 'Lamentations', 'Ezekiel', 'Daniel', 'Hosea', 'Joel', 'Amos', 'Obadiah', 'Jonas', 'Micah', 'Nahum', 'Habakkuk', 'Zephaniah', 'Haggai', 'Zechariah', 'Malachi', 'Matthew', 'Mark', 'Luke', 'John', 'Acts_of_Apostles', 'Romans', '1 Corinthians', '2 Corinthians', 'Galatians', 'Ephesians', 'Philippians', 'Colossians', '1 Thessalonians', '2 Thessalonians', '1 Timothy', '2 Timothy', 'Titus', 'Philem', 'Hebrews', 'James', '1 Peter', '2 Peter', '1 John', '2 John', '3 John', 'Jude', 'Revelation');
// array_map($restored_name,strtolower($value));
foreach ($alt_names_abbrs as $key=>$value){$alt_names_abbrs[$key]=strtolower($value);}





$short_names=array(1 => "Ge.", 'Exodus', 'Le.', 'Nu.', 'De.', 'Jos.', 'Jg.', 'Ru.', '1Sa.', '2Sa.', '1Ki.', '2Ki.', '1Ch.', '2Ch.', 'Ezr.', 'Ne.', 'Es.', 'Job', 'Pss.', 'Pr.', 'Ec.', 'Ca.', 'Isaiah', 'Jeremiah', 'Lamentations', 'Eze.', 'Da.', 'Ho.', 'Joel', 'Am.', 'Ob.', 'Jon.', 'Micah', 'Nahum', 'Habakkuk', 'Zep.', 'Hag.', 'Zec.', 'Malachi', 'Mt.', 'Mr.', 'Lu.', 'Joh.', 'Ac.', 'Ro.', '1Co.', '2Co.', 'Ga.', 'Ephesians', 'Php.', 'Colossians', '1Th.', '2Th.', '1Ti.', '2Ti.', 'Tit.', 'Phm.', 'Hebrews', 'James', '1Pe.', '2Pe.', '1Jo.', '2Jo.', '3Jo.', 'Jude', 'Re.'
);
foreach ($short_names as $key=>$value){$short_names[$key]=strtolower($value);}




$wt_names = array(
1 => "Gen.", 'Ex.', 'Lev.', 'Num.', 'Deut.', 'Josh.', 'Judg.', 'Ruth.', '1 Sam.', '2 Sam.', '1 Ki.', '2 Ki.', '1 Chron.', '2 Chron.', 'Ezra', 'Neh.', 'Esther', 'Job', 'Ps.', 'Prov.', 'Eccl.', 'Song.', 'Isa.', 'Jer.', 'Lam.', 'Ezek.', 'Dan.', 'Hos.', 'Joel', 'Amos', 'Obad.', 'Jonah', 'Mic.', 'Nah.', 'Hab.', 'Zeph.', 'Haggai', 'Zech.', 'Mal.', 'Matt.', 'Mark', 'Luke', 'John', 'Acts', 'Rom.', '1 Cor.', '2 Cor.', 'Gal.', 'Eph.', 'Philippians', 'Col.', '1 Thess.', '2 Thess.', '1 Tim.', '2 Tim.', 'Titus', 'Phil.', 'Heb.', 'Jas.', '1 Pet.', '2 Pet.', '1 John', '2 John', '3 John', 'Jude', 'Rev.');
foreach ($wt_names as $key=>$value){
    $wt_names[$key]=strtolower($value);
}
$old_alt = array(
1 => "Genesis", 'Exo.', 'Leviticus', 'Numbers', 'Deuteronomy', 'Joshua', 'Judges', 'Ruth', '1 Sa.', '2 Sa.', '1 Ki.', '2 Ki.', '1 Ch.', '2 Ch.', 'Ezra', 'Nehemiah', 'Esther', 'Job', 'Psalms', 'Proverbs', 'Ecclesiastes', 'song of sol.', 'Isaiah', 'Jeremiah', 'Lamentations', 'Ezekiel', 'Daniel', 'Hosea', 'Joe.', 'Amos', 'Obadiah', 'Jonah', 'Micah', 'Na.', 'Habakkuk', 'Zephaniah', 'Haggai', 'Zechariah', 'Malachi', 'Matthew', 'Mark', 'Luke', 'John', 'Acts', 'Romans', '1 Co.', '2 Co.', 'Galatians', 'Ephesians', 'Philippians', 'Colossians', '1 Th.', '2 Th.', '1 Ti.', '2 Ti.', 'Titus', 'Philemon', 'Hebrews', 'James', '1 Pe.', '2 Pe.', '1 Jo.', '2 Jo.', '3 Jo.', 'Jude', 'Apocalypse');
// array_map($restored_name,strtolower($value));
foreach ($old_alt as $key=>$value){$old_alt[$key]=strtolower($value);}

$outer_sources_names = array(

1 => "Gn.", 'Exodus', 'Leviticus', 'Numbers', 'Dt.', 'Joshua', 'Judges', 'Ruth', '1 Samuel', '2 Samuel', '1 Kings', '2 Kings', '1 Chronicles', '2 Chronicles', 'Ezra', 'Nehemiah', 'Esther', 'Jb.', 'Psalms', 'Prv.', 'Ecclesiastes', 'song of solomon', 'Is.', 'Jeremiah', 'Lamentations', 'Ezekiel', 'Daniel', 'Hosea', 'Joel', 'Amos', 'Obadiah', 'Jonah', 'Micah', 'Nahum', 'Habakkuk', 'Zephaniah', 'Haggai', 'Zechariah', 'Malachi', 'Matthew', 'Mk.', 'Lk.', 'Jn.', 'Acts', 'Romans', '1 Corinthians', '2 Corinthians', 'Galatians', 'Ephesians', 'Philippians', 'Colossians', '1 Thessalonians', '2 Thessalonians', '1 Timothy', '2 Timothy', 'Titus', 'Philemon', 'Hebrews', 'James', '1 Peter', '2 Peter', '1 John', '2 John', '3 John', 'Jude', 'Revelation');
// array_map($restored_name,strtolower($value));
foreach ($outer_sources_names as $key=>$value){$outer_sources_names[$key]=strtolower($value);}

$add_alt=array(66=>'apoc.',22=>'canticles');

// print_r($wt_names);
// exit;
$flipped=array_flip($handled_name);
$flipped=array_merge($flipped,array_flip($outer_sources_names),array_flip($alt_names_abbrs),array_flip($wt_names),array_flip($short_names),array_flip($old_alt),array_flip($add_alt));

unset($flipped['no book']);
// $book=$flipped;

foreach($flipped as $key=>$value){
    $key=str_replace('.','[\s.]',$key);
    $book[$key]=$value;
    }

    $flipped1=array_combine(str_replace('[\s.]','',array_keys($book)),$flipped);
// print_r($flipped1);

$non_books=array('to','through','chapters','chapter','verse','verses','of','sup','book','vs','vss','chap','chaps',
                'sup','superscriptions','superscription',
                'one','two','three','four','five','six','seven','eigth','nine','ten','eleven','twelve','thirteen',
                'fourteen','fifteen','sixteen','seventeen','eighteen',
                'nineteenth' // -th
);
