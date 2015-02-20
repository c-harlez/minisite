<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "minisite".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Theme minisite',
	'description' => 'VMnisite sur bootstrap_package',
	'category' => 'fe',
	'author' => 'Claire Harlez',
	'author_email' => 'support@cdgfpt46.fr',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.3-7.99.99',
			'bootstrap_package' => '6.2.8-6.99.99',
			'news' => '3.0.1-3.99.99',
			'tt_address' => '2.3.5-2.99.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
	'_md5_values_when_last_written' => '',
	'suggests' => array(),
);