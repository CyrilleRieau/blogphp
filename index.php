<?php
echo '<h1 style ="text-align:center;">Mon Blog </h1>';
    echo '<ul>';
$files= scandir('directo');
foreach($files as $key => $value){
    if ($value === '.txt' or $value ==='.' or $value ==='..'){
    } else {
        echo '<li><a href=directo/'.$value.'>'.$value.'</a></li>';
    }
}
;
echo '</ul>';
?>
