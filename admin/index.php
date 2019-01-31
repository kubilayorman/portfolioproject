<?php

// Check for which page to redirect to

if (isset($_GET["adminpage"])) {
    $adminpage = $_GET["adminpage"];
} else {
    $adminpage = "admin_dashboard";
}

//Validate incoming data from GET - make sure its a string
is_string($adminpage) or is_null($adminpage) or die("Incoming link must be a string");

//Determine the directory for the pages
$directory = __DIR__;

$pages_directory = $directory . "/adminpages/";

// New variable to redirect to requested page
$requested_page = "";

// New variable to convert the page name to a title
$requested_page_title = "";

switch ($adminpage) {
    
    case 'admin_dashboard':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "Dashboard";
        break;

    case 'admin_insights':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "List Insights";
        break;

    case 'admin_newinsight':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "New Insight";
        break;

    case 'admin_cases':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "List Cases";
        break;

    case 'admin_newcase':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "New Case";
        break;
    
    case 'admin_generalsettings':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "General Settings";
        break;
    
    case 'admin_accounts':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "Accounts";
        break;

    case 'admin_logout':
        $requested_page         = "$adminpage.php";
        $requested_page_title   = "Logout";
        break;
    
    default:
        $requested_page         = "pagenotfound.php";
        $requested_page_title   = "Page Not Found";
        break;
}

?>

<?php include_once "admin_includes/admin_meta.php";     //first ?> 
<?php include_once "admin_includes/admin_header.php";   //second ?>
<?php include_once "admin_includes/admin_body.php";     //third ?>


<?php include_once  "$pages_directory/$requested_page"; //fourth ?>


<?php include_once "admin_includes/admin_footer.php";   //fifth ?>
