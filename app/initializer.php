<?php

include_once "config/config.php";

include_once "helpers/helper.php";

spl_autoload_register(function ($file) {
    include_once "libs/" . $file . ".php";
});
