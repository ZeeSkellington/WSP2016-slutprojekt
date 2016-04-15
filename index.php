<?php
/**
 * Created by PhpStorm.
 * User: adam almqvist
 * Date: 2016-04-05
 * Time: 12:56
 */
	$page="home";
//checks if GET exists
if (isset($_GET["page"]))
{
    $page=$_GET["page"];
}
	//require our header, sidebar etc
	require "include/header.php";
	// Deal with the different page contents
	if (file_exists("content/{$page}.php"))
    {
        //require "content/{$page}.php";
    }
    else
    {
        require "content/home.php";
    }
	require "include/footer.php";
?>