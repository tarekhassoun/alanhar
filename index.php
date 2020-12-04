<?php

require_once "constants.php";

$get_path = !empty($_GET['path']) ? $_GET['path'] : "";

$site_url = "http://" . strtolower($site_name) . ".tarek/";
$path = explode('/', trim($get_path, '/'));


// require_once "scripts/db_connect.php";
require_once "scripts/include_classes.php";
// require_once "scripts/check_login.php";


switch ($path[0]) {
    case "home":
        require_once "views/_template/header.php";
        require_once "views/home.php";
        require_once "views/_template/footer.php";
        break;

    // case "search":
    // $path[1] = "pipori";
    //     if (empty($path[1])) {
    //         Redirect::home();
    //         break;
    //     }

    //     $search_term = $path[1];

    //     $page_title = "Search Results for " . $search_term . " | " . $page_title;

    //     require_once "views/_template/header.php";
    //     require_once "views/search.php";
    //     require_once "views/_template/footer.php";
    //     break;

    // case "basket":
    //     $page_title = "My Basket | " . $page_title;

    //     require_once "views/_template/header.php";
    //     require_once "views/basket.php";
    //     require_once "views/_template/footer.php";
    //     break;

    // case "category":
    //     if (empty($path[1])) {
    //         Redirect::home();
    //         break;
    //     }

    //     if (!Product::categoryExists($path[1])) {
    //         Redirect::home();
    //         break;
    //     }

    //     $page_title = ucwords($path[1]) . " | " . $page_title;

    //     require_once "views/_template/header.php";
    //     require_once "views/category.php";
    //     require_once "views/_template/footer.php";
    //     break;

    // case "login":
    //     if (empty($path[1])) {
    //         Redirect::home();
    //         break;
    //     }

    //     $page_title = "Login or register | " . $page_title;

    //     require_once "views/_template/header.php";
    //     require_once "views/login.php";
    //     require_once "views/_template/footer.php";
    //     break;

    // case "product":
    //     if (empty($path[1])) {
    //         Redirect::home();
    //         break;
    //     }

    //     $product = new Product($path[1]);

    //     if (!$product->isLoaded()) {
    //         Redirect::home();
    //     }

    //     $page_title = ucwords($product->getName()) . " | " . $page_title;

    //     require_once "views/_template/header.php";
    //     require_once "views/product.php";
    //     require_once "views/_template/footer.php";
    //     break;

    // case "profile":
    //     if (!$logged_in or empty($user) or !$user->isLoaded()) {
    //         Redirect::to("login");
    //         break;
    //     }

    //     $page_title = "My Profile | " . $page_title;

    //     require_once "views/_template/header.php";
    //     require_once "views/profile.php";
    //     require_once "views/_template/footer.php";
    //     break;
        


    // case "":
    //     $site_name .= " - ";

    //     require_once "views/_template/header.php";
    //     require_once "views/view..php";
    //     require_once "views/_template/footer.php";
    //     break;

    default:
        Redirect::home();
        break;
}

