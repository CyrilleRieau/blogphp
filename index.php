<?php
echo '<h1 style ="text-align:center;">Mon Blog </h1>';
echo '<a href="create.html" style ="text-align:right;">Formulaire </a>';
    echo '<ul>';
$files= scandir('directo');
foreach($files as $key => $value){
    if (is_file('directo/'.$value)){
           echo '<li><a href=directo/'.$value.'>'.$value.'</a>';
           $content = file_get_contents('directo/'.$value);
           echo '<p>'.$content.'</p>';
    echo '<form action="delete.php" method="GET">
    <input type="submit" name='.$value.' value="Delete">
    <input type="hidden" name="filename" value="'.$value.'">
    </form>';
    echo '<form action="modify.php" method="GET">
    <input type="submit" name='.$value.' value="Modify">
    <input type="hidden" name="filemodif" value='.$value.'>
    </form>';
    echo '</li>';
    }
}
;
echo '</ul>';
?>
