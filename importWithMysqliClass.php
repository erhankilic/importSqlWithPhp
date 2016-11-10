<?php

// Name of the file
$filename = 'sql.sql';
// MySQL host
$mysql_host = 'localhost';
// MySQL username
$mysql_username = 'username';
// MySQL password
$mysql_password = 'password';
// Database name
$mysql_database = 'database';

// Connect to MySQL server
$con = @new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);

// Check connection
if ($con->connect_errno)
  {
  echo "Failed to connect to MySQL: " . $con->connect_errno;
  echo "<br/>Error: " . $con->connect_error;
  }

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line) {
// Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

// Add this line to the current segment
    $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        $con->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . $con->error() . '<br /><br />');
        // Reset temp variable to empty
        $templine = '';
    }
}
echo "Tables imported successfully";
$con->close($con);
