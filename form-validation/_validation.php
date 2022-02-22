<?php
session_start();
$_SESSION['hasErr'] = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $_SESSION['nameErr'] = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $_SESSION['hasErr'] = true;
      $_SESSION['nameErr'] = "Only letters and white space allowed";
    }else {
      $_SESSION['name'] = $_POST["name"];
    }
  }
  
  if (empty($_POST["email"])) {
    $_SESSION['hasErr'] = true;
    $_SESSION['emailErr'] = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['hasErr'] = true;
      $_SESSION['emailErr'] = "Invalid email format";
    }else {
      $_SESSION['email'] = $_POST["email"];
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $_SESSION['hasErr'] = true;
      $_SESSION['websiteErr'] = "Invalid URL";
    }else {
      $_SESSION['website'] = $_POST["website"];
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    $_SESSION['comment'] = $_POST["comment"];
  }

  if (empty($_POST["gender"])) {
    $_SESSION['hasErr'] = true;
    $_SESSION['genderErr'] = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    $_SESSION['gender'] = $_POST["gender"];
  }

  header("Location: index.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>