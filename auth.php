<?php
include 'connection.php';
session_start();
function isLoggedIn() {
    return isset($_SESSION['user_name']);
}
function hasAccess($role) {
    if (isLoggedIn() && isset($_SESSION['user_role']) && $_SESSION['user_role'] === $role) {
        return true;
    }
    return false;
}
function restrictAccess($role) {
    if (!hasAccess($role)) {
        header('Location: login.php');
        exit();
    }
}
?>
