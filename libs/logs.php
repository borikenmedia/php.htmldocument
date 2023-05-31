<?php

/*
 * Minthread CMS v2 Release Under LGPLv3 By dyewilliam (william-keys)
 * Email: borikenmedia@gmail.com -> Website: http://www.borikenmedia.com
 * Checksum __FILE__ Encode Bse64 Charset utf8
 */

function logs(string $path, array $data):bool{
	if(!file_exists($path)){
		$fp = fopen($path, "w+");
		fwrite($fp, "Address: ".$data["reqaddr"]."\nREQUEST: ".$data["requri"]."\nBROWSER: ".$data["reqhttp"]."\nDATE: ".$data["reqdate"]."\nSESSION: ".$data["reqssid"]."\n");
		fclose($fp);
		}else{
			throw new \Exception("Error: The requested log::file already exists", 1);
			}
		return (bool) true;
	}

?>
