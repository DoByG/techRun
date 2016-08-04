<?php
/**
 * Autoload classes
 * @param string $className
 */
function autoLoader($className) {
	$foldersList = ['Controllers', 'Models', 'Views'];
	foreach($foldersList as $folder) {
		$filename = $folder . DIRECTORY_SEPARATOR . $className . '.php';
		if(is_readable($filename)) {
			require_once $filename;
			break;
		}
	}
}

spl_autoload_register('autoLoader');