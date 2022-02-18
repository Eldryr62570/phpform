<?php 
$a = null;
$aujourdhui = date("Y-m-d");



//Récupération de l'age
if(isset($_POST["age"])){
    $a = $_POST["age"];
}
//Fonction de validation des dates
function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
//Si format invalide
if(!validateDate($a, 'Y-m-d')){
    header("Location: index.php");
    exit();
}
//Si la date entrée est plus grande que aujourdhui
if(date_create($a)>date_create($aujourdhui)){
    header("Location: index.php");
    exit();
}
//Calcul diff entre dates
$diff = date_diff(date_create($a), date_create($aujourdhui));
echo $diff->format('%y');
//Redirection en f@ de l'age
if($diff->format('%y') >= 18){
    header("Location: https://www.amazon.fr/ref=nav_logo");
    exit();
}else{
    header("Location: https://us.teletubbies.com");
    exit();
}

?>