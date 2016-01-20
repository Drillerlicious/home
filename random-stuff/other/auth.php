<?php
$phpauth = array(
	"enable" => "true",
	"key" => "auth",
	"pass" => "",
	"md5" => "false",
	"post" => "true",
	"get" => "true",
	"bothmatch" => "false",
	"failmsg" => "Error"
);
function ech($name,$var){
	echo "\"$name="."$var\"";
}
if ($phpauth[enable]=="true"){
	$phpauth_get = $_GET["$phpauth[key]"];
	$phpauth_post = $_POST["$phpauth[key]"];
	if ($phpauth[post]=="true") {
		if ($phpauth["md5"]=="true") {
			$phpauth_post = md5($phpauth_post);
		}
		if ($phpauth[pass] !== $phpauth_post) {
			$phpauth_pr = "false";
		} elseif ($phpauth[pass] == $phpauth_post) {
			$phpauth_pr = "true";
		}
	}
	if ($phpauth[get]=="true") {
		if ($phpauth["md5"]=="true") {
			$phpauth_get = md5($phpauth_get);
		}
		if ($phpauth[pass] !== $phpauth_get) {
			$phpauth_gr = "false";
		} elseif ($phpauth[pass] == $phpauth_get) {
			$phpauth_gr = "true";
		}
	}
	if ($phpauth[bothmatch]=="true"){
		If($phpauth_pr OR $phpauth_gr !=="true") {
			echo($phpauth[failmsg]);
			echo"bothmatch fail";
			exit;
			die;
		}
	}
	if ($phpauth_pr AND $phpauth_gr != "true") {
		echo($phpauth[failmsg]);
		exit;
		die;
	}
}
?>
