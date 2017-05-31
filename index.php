<?php
echo '<h1 style ="text-align:center;">Mon Blog </h1>';
echo '<a href="create.html" style ="text-align:right;">Formulaire </a>';
    echo '<ul>';
$files= scandir('directo');
foreach($files as $key => $value){
    if (is_file('directo/'.$value)){
           echo '<li><a href=directo/'.$value.'>'.$value.'</a></li>';
    }
}
;
echo '</ul>';
?>
