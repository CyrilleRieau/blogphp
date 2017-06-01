<?php
$nomfile = $_GET['filemodif'];
echo '<form action="textmodif.php" method="GET">
    <textarea type="text" name="textmodi"></textarea>
    <input type="submit" value="Modifier" >
    <input type="hidden" name="modiftext" value="'.$nomfile.'"></form>';
    
?>