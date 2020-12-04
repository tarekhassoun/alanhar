<?php

class Redirect
{
    /**
     * Empty contructor
     * So as to not trigger deprecated warning
     */
    public function __construct() {}


    public static function home()
    {
        Redirect::to("home");
    }

    public static function to($location)
    {
        header("location: /" . $location);
        exit();
    }
}
