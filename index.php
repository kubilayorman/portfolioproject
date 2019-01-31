<?php

// Check for which page to redirect to

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "insights";
}

//Validate incoming data from GET - make sure its a string
is_string($page) or is_null($page) or die("Incoming link must be a string");

//Determine the directory for the pages
$directory = __DIR__;
$pages_directory = $directory . "/pages/";

// New variable to redirect to requested page
$requested_page = "";

// New variable to convert the page name to a title
$requested_page_title = "";

switch ($page) {
    
    case 'about':
        $requested_page         = "$page.php";
        $requested_page_title   = "About Page";
        break;

    case 'insights':
        $requested_page         = "$page.php";
        $requested_page_title   = "Insights Page";
        break;

    case 'cases':
        $requested_page         = "$page.php";
        $requested_page_title   = "Cases Page";
        break;
    
    case 'process':
        $requested_page         = "$page.php";
        $requested_page_title   = "The Process Page";
        break;
    
    case 'services':
        $requested_page         = "$page.php";
        $requested_page_title   = "Services Page";
        break;

    case 'contact':
        $requested_page         = "$page.php";
        $requested_page_title   = "Contact Page";
        break;

    case 'login':
        $requested_page         = "$page.php";
        $requested_page_title   = "Login Page";
        break;

    case 'the_insight':
        $requested_page         = "$page.php";
        $requested_page_title   = "The Insight Page";
        break;

    case 'the_case':
        $requested_page         = "$page.php";
        $requested_page_title   = "The Case Page";
        break;
    
    
    default:
        $requested_page         = "pagenotfound.php";
        $requested_page_title   = "Page Not Found Page";
        break;
}

?>

<?php include_once  "includes/meta.php"; // first ?>
<?php include_once  "includes/body.php"; // second ?>
<?php include_once  "includes/header.php"; // third ?>

<?php include_once  "$pages_directory/$requested_page"; //fourth ?>

<?php include_once  "includes/footer.php"; // fifth ?>

    
    
