<?php
session_start();
$_SESSION['hasErr'] = false;
$_SESSION['result'] = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["alas"])) {
    $_SESSION['hasErr'] = true;
    $_SESSION['alasErr'] = "Alas is required";
  }

  if (empty($_POST["tinggi"])) {
    $_SESSION['hasErr'] = true;
    $_SESSION['tinggiErr'] = "Tinggi is required";
  }

  $alas = clearInput($_POST["alas"]); 
  $tinggi = clearInput($_POST["tinggi"]);

  $_SESSION['alas'] = $alas;
  $_SESSION['tinggi'] = $tinggi;

  if(!$_SESSION['hasErr']) $_SESSION['result'] = hitungLuas($alas, $tinggi);

  header("Location: index.php");
}

function clearInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function hitungLuas($alas, $tinggi) {
  return ($alas*$tinggi)/2;
}
?>