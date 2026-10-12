<?php
session_start();

function estConnecte() {
    return isset($_SESSION['user_nin']);
}
function estAdmin() {
    return estConnecte() && isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1;
}

function estSimpleUser() {
    return estConnecte() && isset($_SESSION['user_role']) && $_SESSION['user_role'] == 2;
}

function redirigerSiNonAutorise($role_requis = null) {
    if (!estConnecte()) {
        header('Location: ../public space/login.php');
        exit();
    }
    
    if ($role_requis === 'admin' && !estAdmin()) {
        header('Location: ../error.php?code=403');
        exit();
    }
    
    if ($role_requis === 'user' && !estSimpleUser()) {
        header('Location: ../error.php?code=403');
        exit();
    }
}
?>
