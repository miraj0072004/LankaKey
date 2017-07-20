<?php
require('../includes/config.inc.php');
require(MYSQL);

if (empty($_GET['deleteItemId']) || !filter_var($_GET['deleteItemId'],FILTER_VALIDATE_INT,array('min_range'=>1)))
{


// Set the page title and include the header:
$page_title = 'Delete a Word';
include('./includes/admin_header.inc.php');
    
    echo "<h4>This page has been accessed in error! </h4>";
    
include('./includes/admin_footer.inc.php'); 
    
}
else 
{
$q="delete from pages where id='".$_GET['deleteItemId']."'";
$r=mysqli_query($dbc,$q);
    
    if ($r) {
        $url = 'view_page.php'; // Define the URL.	
        header("Location: $url");
        exit();
    }
}
?>
