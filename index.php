<?php
/**
 * Main file for nydalenrevyen.no
 * PHP Version 7.1
 * 
 * @author Jonatan Norbye <jonatan@norbye.com>
 * @link   https://nydalenrevyen.no
 */
$site = "234083";

/*
 * Array to automatically update site content based on date
 * 
 * Instructions:
 * For every new site version, create a new folder with the html and style docs.
 * Folder pattern: {year}{teaser/revy}-{6 random integers}
 * 
 * The Index of the array will be the datetime when it should go live
 *     name is for readability in code only
 *     res is the folder that contains the website
 * */
$sites = array(
    '2020/01/08' => array(
        'name' => "Teaser 2020",
        'res' => "2020teaser",
        'countdown' => "2020/01/31 12:00:00"
    ),
    '2020/01/31 12:02:00' => array(
        'name' => "Deployment 2020",
        'res' => "2020revy",
        'countdown' => "2020/02/27 19:00:00"
    ),
    '2020/12/26 12:00:00' => array(
        'name' => "Teaser 2021",
        'res' => "2021teaser",
        'countdown' => "2021/01/26 12:30:00"
    ),
    '2021/01/26 12:30:00' => array(
        'name' => "Deployment 2021",
        'res' => "2021revy",
        'countdown' => "0000/00/00 00:00:00"
    )
);

$key = "";

foreach (array_keys($sites) as $datetime) {
    if (strtotime($datetime) < strtotime('now')) {
        $key = $datetime;
    }
}

if ($key === "") {
    die("Siden er nede for vedlikehold.");
}

$site =  $sites[$key];

$page = isset($_GET['p']) && file_exists($site['res'] . '/' . $_GET['p'] . '.php') ? $_GET['p'] : 'index';

require $site['res'] . '/' . $page . '.php';