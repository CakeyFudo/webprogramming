<?php 
    session_start();

    function isAjaxRequest(){
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    if (!isAjaxRequest()){
        die("<h1>Forbidden Domain</h1><p>You do not have permission to access this page directly.</p>");
        exit;
    }
    if(isset($_SESSION['account'])){
        if(!$_SESSION['account']['is_staff']){
            header('Location: ../account/login.php');
            exit();
        }
    } else {
        header('Location: ../account/login.php');
        exit();
    }
    
    require_once '../includes/head.php';
?>
    