<?php

// Get URI (everything after domain)
$uri = $_SERVER["REQUEST_URI"];

// Controller
function PageController($name) {
    return "Welcome to the $name page";
}

// Simple Router -> Add new switch cases to add new routes (pages)
switch ($uri) {
    case '/':
        // With controller's data
        $title = PageController("Home");
        require "pages/homePage.php";
        break;
    case '/about':
        // only template
        require "pages/aboutPage.php";
        break;
    case '/pages/contact':
        // New page
        echo "Phone: +995 512 33 23 32";
        break;
    default:
        // Default page, if no route found for request (URI)
        echo "Error 404";
        break;
}
