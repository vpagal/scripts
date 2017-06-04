<?php
	if ($argc < 2) {
		echo "Invalid parameters passed!! \n";
		return;
	}

	$params = getopt("f:");
	if ($params['f'] == "") {
		echo "No filename provided!! \n";
		return;
	}

	$snapshot_name = $params['f'];
	foreach (glob("*.jpg") as $filename) {
		if ($filename != $snapshot_name) {
			echo "Renaming... \n";
			unlink($snapshot_name);
			rename($filename,$snapshot_name);
			echo "File : ".$filename." => ".$snapshot_name."\n";
		}
	}
?>
