<?php

// Check for which page to redirect to

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "posts";
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

    case 'posts':
        $requested_page         = "$page.php";
        $requested_page_title   = "Posts Page";
        break;

    case 'portfolio':
        $requested_page         = "$page.php";
        $requested_page_title   = "Portfolio Page";
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

    case 'the_post':
        $requested_page         = "$page.php";
        $requested_page_title   = "The Post Page";
        break;

    case 'the_portfolio':
        $requested_page         = "$page.php";
        $requested_page_title   = "The Portfolio Page";
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

    
    
