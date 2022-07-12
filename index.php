<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$smarty = new Smarty();
$smarty->assign('name', 'Rumon');
$smarty->display('home.tpl');
