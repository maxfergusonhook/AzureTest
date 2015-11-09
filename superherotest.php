<?php

// connect to your server and select database

$db = new mysqli("br-cdbr-azure-south-a.cloudapp.net","bcc549c1bd791c","acf8b795", "azuretest");

// create a SQL query as a string

$sql_query = "SELECT * FROM marvelmovies";


$result = $db->query($sql_query);

echo "<h2>List of Movies</h2>";

while($row = $result->fetch_array()){
   echo "<p>" . $row['title'] . "</p>";
}

$result->close();
   $db->close();
