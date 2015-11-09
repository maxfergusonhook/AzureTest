<?php

// connect to your server and select database

$db = new mysqli(“br-cdbr-azure-south-a.cloudapp.net”,“bcc549c1bd791c”,“acf8b795”, “azuretest”);

// test if connection was established, and print any errors

// create a SQL query as a string

$sql_query = "SELECT * FROM superheros ?WHERE productionStudio LIKE '%Fox%'";

// execute the SQL query

$result = $db->query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array

while($row = $result->fetch_array()){
   // print out fields from row of data
   echo "<p>” . $row['superheroName'] . “</p>";
}

$result->close();
   // close connection to database
   $db->close();
