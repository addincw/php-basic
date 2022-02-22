<?php 
$_SESSION['resultHistory'] = isset($_SESSION['resultHistory']) ? $_SESSION['resultHistory'] : [];

function newResult($alas, $tinggi, $result)
{
    $_SESSION['resultHistory'][] = [
        'alas' => $alas,
        'tinggi' => $tinggi,
        'result' => $result
    ];
}