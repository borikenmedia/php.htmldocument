<?php

/*
 * Minthread CMS v2 Release Under LGPLv3 By dyewilliam (William-keys)
 * Email: borikenmedia@gmail.com -> Website: www.borikenmedia.com
 * Checksum __FILE__ - Encode Bse64 - Charset utf8 - Paradigma {nor(Sn)xor(Pe)}
 */
 
trait dhtml{
	
	public function _html(string $_style, array $_content){
$_html = <<<EOF
<!DOCTYPE html public>
<html lang="en-us">
<head>
<title>{$_content["title"]}</title>
<meta name="description" content="FILEBROWSER" />
<meta name="aucthor" content="dyewilliam" />
<meta charset="UTF-8" />
<style type="text/css">
<!--
{$_style}
//-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="banner">{$_content["banner"]}</div>
	<div id="_new"></div>
	<div id="_sitemap">Home &gt; {$_content["sitemap"]}</div>
	<div id="_info">
		<div id="_sidebar">SIDEBAR</div>
		<div id="_content">{$_content["body"]}</div>
	</div>
	<div id="_new"></div>
	<div id="_copyright">Copyright &copy; 2011/2023 &minus; www.borikenmedia.com &minus; Contact</div>
</div>
</body>
</html>
EOF;
	return (string) $_html;
		}
		
		public function assets($_define = ""){
			if($_define = "stylesheet"){
$_css = <<<EOF
*{
margin: 0;
padding: 0;
}

Body{
	margin: 1em;
	padding: 0;
	background: #fff;
	font: normal .75em "Lucida Sans Unicode", sans-serif;
	color: #000;
}

div#wrapper{
	margin: 1em Auto;
	padding: 1%;
	width: 73%;
	background: #f1f1f1;
	border: solid 1px #ddd;
}

div#banner{
	margin: 0;
	padding: 1%;
	width: 98%;
	background: #ddd;
	font: normal 2em "Lucida Sans Unicode", sans-serif;
	color: #000;
}

div#_sitemap{
	margin: 0;
	padding: 1%;
	width: 98%;
	background: #fff;
}

div#_info{}

div#_sidebar{
	margin: 0;
	padding: 1%;
	width: 23%;
	background: #fff;
	float: left;
	display: inline-table;
}

div#_content{
	margin: 0;
	padding: 1%;
	width: 73%;
	background: #eee;
	float: left;
	display: inline-table;
}

span#label{
	font: bold .65em "lucida Sans Unicode", sans-serif;
	color: #960000;
}

span#item{
	font: normal .75em Arial;
	color: green;
}

div#_copyright{
	margin: 0;
	padding: 1%;
	width: 98%;
	background: #ddd;
	font: normal 1em "Lucida Sans Unicode", sans-serif;
	color: #000;
}

div#_new{clear: both;}

EOF;

	}else{
		throw new \Exception("Error: The requested stylesheet is not available", 1);
		}
		return (string) $_css;
	}
}
 
class phpfiler{
	
	var $_ssid;
	var $_tpl;
	var $_path;
	
	use dhtml;
	
	public function __Construct(string $_path = "/var/www/html/nodes/tmp/"){
		$this->_path = $_path;
		$this->_ssid = $this->session_id();
		}
	
	private function setfile(string $_data):bool{
		$_file = $this->_path."cache/{$this->_ssid}.html";
		if($fp = fopen($_file, "w+")){
			fwrite($fp, $_data);
			fclose($fp);
			}else{
				throw new \Exception("Error: The requested path::file is not available", 1);
				}
			return (bool) true;
		}
	
	private function getfile():string{
		$_path = "tmp/content.txt";
		$_read = "";
		if(file_exists($_path)){
			$fp = fopen($_path,"r");
			$_read .= fread($fp, filesize($_path));
			fclose($fp);
			}else{
				throw new \Exception("Error: The requested file::content is noat available", 1);
				}
			return (string) $_read;
		}
	
	public function sortfile():string{
		$_stylesheet = $this->assets("stylesheet");
		$_content = array(
			"title" => "Boriken Media Subs 2023",
			"banner" => "Graphic Content Urne", 
			"sitemap" => "Sample Document", 
			"body" => $this->getfile());
		/* Iterate through array */
		$this->_tpl = $this->_html($_stylesheet, $_content);
		$this->setfile($this->_tpl);
		return (string) $this->_tpl;
		}
	
	function deletefile(){}
	
	private function session_id():string{
		$_string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890+\\";
		$_length = rand(11,25);
		$_value = substr(str_shuffle($_string), 0, $_length);
		return (string) $_value;
		}
	
	public function __get($_file){}
	
	public function __set($var, $val){}
	
	}
	
	
?>
