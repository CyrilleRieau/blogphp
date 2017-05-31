<?php
$title = $_POST['title'];
$text = $_POST['text'];
if (file_exists('directo')) {
$myfile = fopen('directo/'.$title.'.txt', 'x+');
fwrite($myfile, $text);
fclose($myfile);
} else {
mkdir('directo')    ;
$myfile = fopen('directo/'.$title.'.txt', 'x+');
fwrite($myfile, $text);
fclose($myfile);
}
?>