<?php

$url = "https://sheets.googleapis.com/v4/spreadsheets/11BCnspCt2Mut3nhc4WMY6CYTd0zF9C3eCzsk1AEpKLM/values/sales!A1:E6?fields=values&key=YOUR_API_KEY";

$data = json_decode(file_get_contents($url),true);

foreach($data["values"] as $value) {
	foreach($value as $val) {
		echo "'".$val."'".",";
	}
	echo "\n";
}

?>