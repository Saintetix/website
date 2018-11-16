<?php
$lib_index = 'lib.php';
$lib_listproject = '../lib.php';
$lib_project = '../../lib.php';
if (file_exists($lib_index)) {
    require($lib_index);
} elseif (file_exists($lib_listproject)) {
    require($lib_listproject);
} elseif (file_exists($lib_project)) {
    require($lib_project);
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title_page ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $webRoot; ?>css/main.css"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 750px)" href="<?= $webRoot ?>css/small.css"/>
    <link rel="stylesheet" href="<?= $webRoot ?>css/md.css">
    <link rel="stylesheet" href="<?= $webRoot ?>JS-Markdown-Editor-master/dist/mdeditor.css">
    <link rel="icon" type="image/x-icon" href='<?= $webRoot ?>assets/pic.jpg'>
</head>
<body>
    <div class='section'>
        <div class='container'>
            <nav>
                <a href='<?= $webRoot ?>'><h1><img class='pic' src='<?= $webRoot ?>assets/pic.jpg' alt=':('>Saintetix</h1></a>
                <ul>
                    <span><a href='<?= $webRoot ?>project'><li>Project</li></a></span>
                    <span><a target='_blanck' href='https://twitter.com/saintetix'><li>Twitter</li></a></span>
                </ul>
            </nav>
            <div class='content'>
                <div class='project markdown-body'>
                    <article>
