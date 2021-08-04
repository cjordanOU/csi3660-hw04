<?php
	/* Created By Cameron Jordan 2021 */
	/* This file creates 10 commits to github */
	
	# ----- Iterator File -----
	$runFile = fopen("runtimes.txt", "r+");
	$fileSize = filesize("runtimes.txt");
	if ($fileSize == 0) {
		$fileSize++;
	}
	$runTimes = fread($runFile,$fileSize);
	$runTimes = intval($runTimes); # Converts to integer
	
	# ----- Check to see how many times the script has been run -----
	if ($runTimes < 10) {
		$runTimes++;
		file_put_contents("runtimes.txt", $runTimes);
		fclose($runFile);
		shell_exec('git commit -a -m "updated file iteration number '. $runTimes .'"');
		exit("The current Iteration is $runTimes Time(s)\n");
	}
	else {
		fclose($runFile);
		exit("The file has iterated 10 times\n");
	}
?>
