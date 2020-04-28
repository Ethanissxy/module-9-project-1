<?php 
// Version 1 Post 4 include File Author Ethan Longhurst 4:27pm 24th March 2020
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
$sql = "SELECT * FROM `blog_entries` WHERE id = 4";

// QUERY THE DATABASE 
$result = mysqli_query($connection, $sql);

// WILL FETCH THE RESULTS AND ECHO THE RESPECTED ENTRY
$entry = mysqli_fetch_assoc($result);
echo "<h2>" . $entry["title"] . "</h2>"
. "<p>" . $entry["paragraph_1"]. "</p>"
. "<p>" . $entry["paragraph_2"]. "</p>"
. "<p>" . $entry["paragraph_3"]. "</p>"
. "<p>" . $entry["paragraph_4"]. "</p>"
. "<p>" . $entry["paragraph_5"]. "</p>"
. "<p>" . $entry["paragraph_6"]. "</p>"
. "<p>" . $entry["paragraph_7"]. "</p>"
. "<p>" . $entry["paragraph_8"]. "</p>"
. "<p>" . $entry["paragraph_9"]. "</p>";


// close the connection
mysqli_close($connection);
?>
