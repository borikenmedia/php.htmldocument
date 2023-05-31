<?php
session_start();
ini_set("error_reporting", E_ALL);
date_default_timezone_set("UTC");
header("Content-type: text/html; Charset: UTF-8; Pragma: no-cache;");

/*
 * Minthread CMS v2 Release Under LGPLv3 By dyewilliam (Williaqm-Keys)
 * Email: borikenmedia@gmail.com -> Website: http://borikenmedia.com
 * Checksum: __FILE__ Encode: Bse64 Charset: utf8
 */

define("_PATH", dirname(__DIR__));
define("_TIME", date("D M d Y h:ia"));
/* unittesting tests 02 */

include("libs/logs.php");
include("libs/phpviewer.php");
/* Include Libraries and Dictionaries */

$app = new phpfiler();
/* Invoke the php/html class and methods */

$path = "tmp/logs/logs.{$app->_ssid}.txt";
$data = array(
	"reqaddr" => $_SERVER["REMOTE_ADDR"],
	"requri" => $_SERVER["REQUEST_URI"],
	"reqhttp" => $_SERVER["HTTP_USER_AGENT"],
	"reqdate" => date("D M d Y h:ia"),
	"reqssid" => $app->_ssid);
logs($path, $data);
/* Generated content for computer language */

$_render = $app->sortfile();

echo $_render;

?>
