<?php
// 	html escape
function h($string = '') {
	return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
}

// 	test die
function die_r($v) {
	echo '<pre>';
	print_r($v);
	echo '</pre>';
	die;
}

//	json encode var and die
function die_j($var) {
	die(json_encode($var, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK));
}

// 	redirect to home page
function goHome() {
	header('Location: ' . MYSITE);
	die;
}

/*
 * 	Automatically generate link for javascript and stylesheet assets
 * 	If there are multiple file versions, target the file with the latest modified date
 *
 * 	@param string  $file 	- name of the file
 * 	@param string  $folder 	- folder name
*/

function getAssetLink($file, $folder) {

	$filePaths = glob(PUBLIC_PATH . $folder . DS . $file);

	if (count($filePaths) > 1) {

		foreach ($filePaths as $path) {

			$key 			= basename($path);
			$value 			= filemtime($path);
			$files[$key] 	= time() - $value;
		}

		asort($files);
		$files = array_keys($files);
		$file = $files[0];

	} else {
		$file = basename(implode('', glob(PUBLIC_PATH . $folder . DS . $file)));
	}

	$string = '';

	if ( ! CACHE) {
		$ms 	= round(microtime(true) * 1000);
		$string .= '?request=' . $ms;
	}

	return MYSITE . $folder . '/' . $file . $string;
}

function getMetaData($pageTitle = '', $cssFile = '', $array = []) {

	global $stylesheet;	//	defined in init.php

	require_once INC . 'metadata.php';

	if ($array) {
		foreach ($array as $link) {
			if (isset($stylesheet[$link])) {
				echo $stylesheet[$link];
			}
		}
	}

	if ($cssFile !== '') {
		echo '<link rel="stylesheet" href="' . getAssetLink($cssFile, 'css') . '">';
	}
}

function getNavigationBar() {
	require_once INC . 'navigation-bar.php';
}

function getJavascript($jsFile = '', $array = []) {

	global $javascript;	//	defined in init.php

	if ($array) {
		foreach ($array as $link) {
			if (isset($javascript[$link])) {
				echo $javascript[$link];
			}
		}
	}

	echo '<script src="' . getAssetLink($jsFile, 'js') . '"></script>';
}

function getFooter() {
	require_once INC . 'footer.php';
}

function getGMTDateTime() {
	return gmdate('Y-m-d H:i:s', time());
}
?>