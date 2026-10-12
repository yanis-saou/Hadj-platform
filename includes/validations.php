<?php

function validerNIN($nin) {
    return preg_match('/^[0-9]{18}$/', $nin);
}


function validerEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email);
}


function validerMotDePasse($password) {
    return preg_match('/^(?=.*[A-Za-z])(?=.*\d)\S{8,}$/u', $password);
}


function validerNomPrenom($chaine) {
    return preg_match('/^[A-Za-zÀ-ÿ\s\-]{2,50}$/', $chaine);
}
?>
