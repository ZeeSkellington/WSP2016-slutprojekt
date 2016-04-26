<?php
/**
 * Created by PhpStorm.
 * User: adam almqvist
 * Date: 2016-04-05
 * Time: 12:56
 * Some people just want to see the world burn.
 */
        

//require our header, sidebar etc
require "include/header.php";
//checks if GET exists
if (isset($_GET["page"])) {
    $page = $_GET["page"];



    // Deal with the different page contents
    if (file_exists("content/{$page}.php")) {
        //require the content page that is requested
        require "content/{$page}.php";
    } else {
        //if the page is non existent, then show the home page
        require "content/home.php";
    }
}
else
{
    require ("content/home.php");
}
    //require the footer
    require "include/footer.php";

    ?>