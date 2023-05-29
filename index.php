<?php
session_start();
error_reporting(E_ERROR|E_PARSE|E_NOTICE|E_ALL);
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

include("phpviewer.php");

$app = new phpfiler();

$_render = $app->setfile();

echo $_render;

?>
