<?php
$filesupp = $_GET['filename'];
unlink('directo/'.$filesupp);
echo '<a href="index.php" style="text-align:center">Liste </a>';
?>