<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2/19/2017
 * Time: 10:24 AM
 */

spl_autoload_register(function ($class_name) {
    include ('assets/libraries/' . $class_name . '.php');
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotels Deal</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link href="assets/css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">