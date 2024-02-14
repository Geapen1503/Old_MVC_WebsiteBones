<?php
include_once 'controller/controller.php';
session_start();
global $conn;
$page = $_GET['p'] ?? null;

try {
    if($page != null) {
        switch ($page) {
            case 'home':
                showPage('view/home.php');
                break;
            case 'p1':
                showPage('view/p1.php');
                break;
            case 'p2':
                showPage('view/p2.php');
                break;
            case 'p3':
                showPage('view/p3.php');
                break;
            default:
                showPage('view/home.php');
                break;
        }
    } else {
        showPage('view/home.php');
    }
} catch (Exception $e) {
    echo 'Erreur';
    header('Location: /error');
}