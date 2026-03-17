<?php
function securiserMDP($mdp) {
    $mdp = trim($mdp); 
    return password_hash($mdp, PASSWORD_DEFAULT); 

}
function authentifier($mdp, $hashCode) {
    return password_verify($mdp, $hashCode); 
}
$pw="2LIG2";
$hashCode=securiserMDP($pw);
$pwdsaisie=$_POST['mdp']  ;
if (authentifier($pwdsaisie, $hashCode)) {
    echo "Bienvenue";
} else {
    echo "Error: Invalid password.";
}

?>