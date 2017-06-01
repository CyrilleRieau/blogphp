<?php
echo '<a href="create.html" style ="text-align:right;">Formulaire </a><br/>';
echo '<a href="index.php" style="text-align:center">Liste </a>';
$title = $_POST['title'];
$text = $_POST['text'];
if (file_exists('directo')) {
$myfile = fopen('directo/'.$title.'.txt', 'w+');
fwrite($myfile, $text);
fclose($myfile);
} else {
mkdir('directo')    ;
$myfile = fopen('directo/'.$title.'.txt', 'w+');
fwrite($myfile, $text);
fclose($myfile);
}
?>