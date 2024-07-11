<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var \CMain $APPLICATION */

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<? SITE_TEMPLATE_PATH ?>./assets/images/favicon.604825ed.ico" type="image/x-icon">
    <? $APPLICATION->ShowHead(); ?>

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/css/common.css');
    ?>
</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>