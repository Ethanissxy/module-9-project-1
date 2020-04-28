<?php 
// Version 1 Post 2 include File Author Ethan Longhurst 4:27pm 24th March 2020
$servername = "localhost";
$username = "ethanlwe_nathan";
$password = "NaPwB46ANOBmABC";
$dbname = "ethanlwe_nathanashburydb";


// CREATE THE CONNECTION TO THE DATABASE
$connection = new mysqli($servername, $username, $password, $dbname);

// IF THE CONNECTION FAILS SEND A MESSAGE
if (!$connection) {
    die("Connection failed. Notify Administrator." . "  " . mysqli_connect_error());
}


// WRITE THE QUERY
$sql = "SELECT * FROM `blog_entries` WHERE id = 2";

// QUERY THE DATABASE 
$result = mysqli_query($connection, $sql);

// WILL FETCH THE RESULTS AND ECHO THE RESPECTED ENTRY
$entry = mysqli_fetch_assoc($result);
echo "<h2>" . $entry["title"] . "</h2>"
. "<p>" . $entry["paragraph_1"] . "</p>"
. "<ul>" 
. "<li class=\"quote\">" . $entry["quote_1"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_2"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_3"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_4"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_5"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_6"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_7"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_8"]. "</li>"
. "<li class=\"quote\">" . $entry["quote_9"]. "</li>"
. "</ul>";


// close the connection
mysqli_close($connection);
?>
