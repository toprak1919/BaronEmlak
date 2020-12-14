<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "Please login first <a href='login.html'> here </a>";
    exit;
}

if (isset($_GET['pageNumber']))
    $menuChoice = $_GET['pageNumber'];
    else
        $menuChoice = 3;
        
        if ( $_SESSION['username']) {
            require_once 'showTopMenu.php';
            
            switch ($menuChoice) {
                case 1:
                    require_once 'showSearchForm.php';
                    break;
                case 2:
                    require_once 'showAddForm.php';
                    break;
                case 3:
                    require_once 'showMainWelcome.php';
                    break;
                case 4:
                    require_once 'öndekİlanlar.php';
                    break;
            }
        }
        else {
            echo "<h1>Admin paneli</h1>";
            echo "Please login first <a href='login.html'>Login here</a>";
            exit;
        }
        
        ?>

