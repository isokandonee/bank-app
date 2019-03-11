<?php
session_start();
$_SESSION['token'] = "sdkajsdaksjdklasjdaklsdjalkjs938092qpwoalsdalsdasdasd";
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/bank-app/about.php":
        $CURRENT_PAGE = "About";
        $PAGE_TITLE = "About Us";
        break;
    case "/bank-app/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact Us";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to my homepage!";
}
