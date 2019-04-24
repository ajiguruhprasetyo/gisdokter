<?php

header('Content-Type: application/json');

$link = mysql_connect('localhost','root','');
mysql_select_db('gis_dokter', $link);

$position = explode(',', trim(urldecode($_GET['position'])));

$sql = "SELECT nik, nama, gender, tempat_praktek, lang_dok, long_dok,
		(6371 * acos(cos(radians(".$position[0].")) 
		* cos(radians(lang_dok)) * cos(radians(long_dok) 
		- radians(".$position[1].")) + sin(radians(".$position[0].")) 
		* sin(radians(lang_dok)))) 
		AS jarak 
		FROM data_dokter 
		HAVING jarak <= ".$_GET['jarak']." 
		ORDER BY jarak";

$data   = mysql_query($sql);
$json   = array();
$output = array();
$i = 0;

if (!empty($data)) {
	$json = '{"data": {';
	$json .= '"data_dokter":[ ';
	while($x = mysql_fetch_array($data)){
	    $json .= '{';
	    $json .= '"nik":"'.$x['nik'].'",
	    		 "nama":"'.htmlspecialchars_decode($x['nama']).'",
				"gender":"'.htmlspecialchars_decode($x['gender']).'",
				"tempat_praktek":"'.htmlspecialchars_decode($x['tempat_praktek']).'",
				 "lang_dok":"'.$x['lang_dok'].'",
			     "long_dok":"'.$x['long_dok'].'",
			     "jarak":"'.$x['jarak'].'"
	             },';
	}
 
	$json = substr($json,0,strlen($json)-1);
	$json .= ']';
	$json .= '}}';
	 
	echo $json;
} 
