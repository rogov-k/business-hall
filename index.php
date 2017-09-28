<?php
session_start();
$_SESSION['scrf'] = 123;
$content['text']['form'] = file_get_contents('files/form.txt');
$content['text']['rules'] = file_get_contents('files/rules.txt');
$content['text']['lux'] = file_get_contents('files/lux.txt');
$content['text']['lux-full'] = file_get_contents('files/lux-full.txt');
$content['text']['lux-include'] = file_get_contents('files/lux-include.txt');
$content['text']['common'] = file_get_contents('files/common.txt');
$content['text']['common-full'] = file_get_contents('files/common-full.txt');
$content['text']['common-include'] = file_get_contents('files/lux-include.txt');
$content['text']['description'] = file_get_contents('files/description.txt');
$content['text']['welcome'] = file_get_contents('files/welcome.txt');

require_once 'template/main_page.tpl.php';