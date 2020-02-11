<?php

require "template/header.php";

$page = $_GET["page"];

switch ($page)
{
    case 'about':
        include "pages/about.php";
        break;
    case 'projects':
        include "pages/projects.php";
        break;
    default:
        include "pages/home.php";
        break;
}

require "template/footer.php";

?>