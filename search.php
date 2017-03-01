<?php
include_once 'core/Helpers.php';
$config = include './config/Configuration.php';

include($config['views']['header']);
$filtered_data = Helpers::search($_POST);

include($config['views']['result']);

include($config['views']['footer']);




?>

