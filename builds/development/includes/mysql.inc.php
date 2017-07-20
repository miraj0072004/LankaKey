<?php

// This file contains the database access information. 
// This file establishes a connection to MySQL and selects the database.


// Set the database access information as constants:
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'lanka_key');

// Make the connection:
$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Set the character set:
mysqli_set_charset($dbc, 'utf8');

// Omit the closing PHP tag to avoid 'headers already sent' errors!

// Function for escaping and trimming form data.
// Takes one argument: the data to be treated (string).
// Returns the treated data (string).
function escape_data ($data, $dbc) { 

// Strip the slashes if Magic Quotes is on:
if (get_magic_quotes_gpc()) $data = stripslashes($data);

// Apply trim() and mysqli_real_escape_string():
return mysqli_real_escape_string ($dbc, trim ($data));

} // End of the escape_data() function.