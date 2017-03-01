<?php

    $config = include './config/Configuration.php';

    include($config['views']['header']);
    include($config['views']['form']);
    include($config['views']['footer']);
?>