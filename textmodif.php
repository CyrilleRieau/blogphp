<?php
echo '<a href="index.php" style="text-align:center">Liste </a>';
$textmodi = $_GET['textmodi'];
$fillemodi =$_GET['modiftext'];
    file_put_contents('directo/'.$fillemodi, $textmodi, FILE_APPEND);

?>
