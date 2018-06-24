<?php

define('ROOT', dirname(_FILE_));

set_include_path( ROOT . "/actions" . PATH_SEPARATOR . ROOT . "/core" . PATH_SEPARATOR . ROOT . "/configs" . PATH_SEPARATOR . get_include_path());


require_once 'HelloAction.php';


?>