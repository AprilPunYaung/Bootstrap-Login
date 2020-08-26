<?php
    require'db.php';
    session_start();
    function Login()
    {
        header("Location: index.php");
        die();
    }

    function Home()
    {
        header("Location: home.php");
    
    }

?>