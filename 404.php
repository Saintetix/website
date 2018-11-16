<?php require('lib.php'); ?>

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
            <div class='content'>
                <div class='project markdown-body'>
                    <article>

<?php echo $Parsedown->text($md_content); ?>
<div class='emoji'>⛔️</div>
<?php require('partials/footer.php'); ?>
