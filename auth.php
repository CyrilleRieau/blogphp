<?php
$json = file_get_contents('auth.json');
$obj = json_decode($json);
$user=$_POST['user'];
$pwd=$_POST['pass'];
$mdphach = md5($pwd);
$tableaufin = [];
foreach ($tableaufin as $utilisateur){
if (!isset($user) && !isset($mdphach)) {
    $object = [
        "user" => $user,
        "password" => $mdphach
    ];
    $createtabjson = json_encode($object);
    array_push($tableaufin, $createtabjson);
} else {
echo 'Utilisateur déjà existant';
};
if (($utilisateur[0] === $user) && ($utilisateur[1] === $mdphach)) {
echo "Okkkkkkkk";
} else {
    echo 'Not good bro !';
}
}
?>