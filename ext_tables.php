<?php
if (!defined('TYPO3_MODE')) {
die('Access denied.');
}
/***************
* Make the extension configuration accessible
*/
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}