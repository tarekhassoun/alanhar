<?php

$skip_class_files = array(".", "..", ".htaccess");

$handle = opendir("classes");

while (false !== ($entry = readdir($handle))) {
    if (!in_array($entry, $skip_class_files)) {
        require_once "classes/" . $entry;
    }
}
