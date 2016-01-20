<?php
//Connect to multiple addresses using a single file
//useful for cronjobs
//By Thunder33345(twitter.com/thunder33345)
//2016/1/17
$site = array(
"https://192.168.1.1",
);


function con($site){
	if (file_get_contents("$site")){
		echo(1 );
		echo($site);
		echo"||";
	} else {
		echo(0 );
		echo($site);
		echo"||";
	}
}
foreach($site as &$val){
	con($val);
}
unset($val);
?>
