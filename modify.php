<?php
$nomfile = $_GET['filemodif'];
$content = file_get_contents('directo/'.$nomfile);

echo '<form action="textmodif.php" method="GET">
    <textarea type="text" name="textmodi">'.$content.'</textarea>
    <input type="submit" value="Modifier" >
    <input type="hidden" name="modiftext" value="'.$nomfile.'"></form>';
    
?>