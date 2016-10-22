<?php

//error_reporting(0);
//ini_set('display_errors', 'on');

require 'vendor/autoload.php';

$smarty = new Smarty;
$crawler = PHPCrawler::class;


$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("Name", "Alex", true);
$smarty->assign("FirstName", array("Alex", "Nadine"));
$smarty->assign("LastName", array("Panteleychuk", "Osadcha"));
$smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
    array("M", "N", "O", "P")));

$smarty->assign("contacts", array(array("phone" => "1"),
    array("phone" => "067-777-77-77", "fax" => "067-777-77-77", "cell" => "067-777-77-77")));

$smarty->assign("option_values", array("CH", "KY", "SM"));
$smarty->assign("option_output", array("Cherkassy", "Kyiv", "Smila", ));
$smarty->assign("option_selected", "NE");

$smarty->display('index.tpl');
echo "test";
$crawler