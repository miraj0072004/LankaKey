<?php
//flag variable for site status
define('LIVE',FALSE);

//contact address
define('EMAIL','miraj0072004@gmail.com');

// ****************************************** //
// ************ CONSTANTS   ************ //
define ('BASE_URI', 'C:/MyWork/LankaKey/');

define ('BASE_URL', 'http://localhost:8080/');

define ('MYSQL', BASE_URI . 'builds/development/includes/mysql.inc.php');
// ************ CONSTANTS   ************ //
// ****************************************** //



// ****************************************** //
// ************ ERROR MANAGEMENT ************ //

// Create the error handler:
function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {

// Build the error message:
$message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";

// Add the date and time:
$message .= "Date/Time: " . date('n-j-Y H:i:s') . "\n";

if (!LIVE) { // Development (print the error).

// Show the error message:
echo '<div class="error">' . nl2br($message);

// Add the variables and a backtrace:
echo '<pre>' . print_r ($e_vars, 1) . "\n";
debug_print_backtrace();
echo '</pre></div>';

} else { // Don't show the error:

// Send an email to the admin:
$body = $message . "\n" . print_r ($e_vars, 1);
mail(EMAIL, 'Site Error!', $body, 'From: email@example.com');

// Only print an error message if the error isn't a notice:
if ($e_number != E_NOTICE) {
echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br />';
}
} // End of !LIVE IF.

} // End of my_error_handler() definition.

// Use my error handler:
set_error_handler ('my_error_handler');

// ************ ERROR MANAGEMENT ************ //
// ****************************************** //
?>