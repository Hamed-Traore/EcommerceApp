<?php
// From URL to get webpage contents.
$url = "https://contactappashesi.000webhostapp.com/view/Form.php";

// Initialize a CURL session.
$ch = curl_init();

// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

var_dump ($result);

?>
