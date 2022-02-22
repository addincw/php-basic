<?php
    session_start();

    $alas = isset($_SESSION['alas'] ) ? $_SESSION['alas'] : 0;
    $tinggi = isset($_SESSION['tinggi'] ) ? $_SESSION['tinggi'] : 0;
    $result = isset($_SESSION['result'] ) ? $_SESSION['result'] : 0;
    $resultHistory = isset($_SESSION['resultHistory'] ) ? $_SESSION['resultHistory'] : [];

    $hasErr = isset($_SESSION['hasErr']) ? $_SESSION['hasErr'] : false;
    $alasErr = isset($_SESSION['alasErr'] ) ? $_SESSION['alasErr'] : '';
    $tinggiErr = isset($_SESSION['tinggiErr'] ) ? $_SESSION['tinggiErr'] : '';
    
    unset($_SESSION['alas'], $_SESSION['tinggi'], $_SESSION['result'], $_SESSION['hasErr'], $_SESSION['alasErr'], $_SESSION['tinggiErr']);
?>