<?php
    session_start(); //to ensure you are using same session
    session_destroy(); //destroy the session
    header("location:/medicine_guide/index.php"); //to redirect back to "index.php" after logging out
exit();
?>