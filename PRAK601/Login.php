<?php
    session_start();
    
    if (!isset($_SESSION['nomor_member'])) {
        header("Location: Indeks.php");
    }
?>