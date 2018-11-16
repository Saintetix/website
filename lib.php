<?php
/* webRoot */
$webRoot = "http://".$_SERVER['HTTP_HOST'] . '/';

/* Markdown */
require('vendor/autoload.php');
$Parsedown = new Parsedown();
use League\HTMLToMarkdown\HtmlConverter;
$converter = new HtmlConverter();
$file = basename($_SERVER['PHP_SELF'], ".php");
$md_file = $file . '.md';
if (file_exists($md_file)) {
    $md_content = file_get_contents($md_file);
}

/* Title */
$title = array(
    'index' => 'Saintetix'
    ,'project' => 'Project'
    );
$title_page = isset($title[$page]) ? $title[$page] : 'Saintetix'; ?>
