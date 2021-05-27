<?php

// if(isset($_COOKIE['ID_my_site'])) {
//     //if there is, it logs you in and directes you to the members page
//     $username = $_COOKIE['ID_my_site'];
//     $pass = $_COOKIE['Key_my_site'];
//     $check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
//     while($info = mysql_fetch_array( $check )) {
//         if ($pass != $info['password']) {}
//         else { header("Location: members.php"); }
//     }
// }

$logged_in = false;
if (!empty($_SESSION["logged_in_user_id"])) {
    $user = new User($_SESSION["logged_in_user_id"]);
    $logged_in = true;
}
