<?php
session_start();

// Check if user is logged in and has staff privileges
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
<body id="dashboard">
    <div class="wrapper">
        <?php
            require_once '../includes/topnav.php';
            require_once '../includes/sidebar.php';
        ?>
        <div class="content-page px-3">
            <!-- dynamic content here -->
        </div>
    </div>
    <?php
        require_once '../includes/footer.php';
    ?>
</body>
</html>
