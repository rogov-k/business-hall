<?php
session_start();
$_SESSION['scrf'] = 123;
$content['text']['form'] = file_get_contents('texts/form.txt');
$content['text']['rules'] = file_get_contents('texts/rules.txt');
$content['text']['lux'] = file_get_contents('texts/lux.txt');
$content['text']['lux-full'] = file_get_contents('texts/lux-full.txt');
$content['text']['common'] = file_get_contents('texts/common.txt');
$content['text']['common-full'] = file_get_contents('texts/common-full.txt');
$content['text']['description'] = file_get_contents('texts/description.txt');
$content['text']['welcome'] = file_get_contents('texts/welcome.txt');

require_once 'template/main_page.tpl.php';