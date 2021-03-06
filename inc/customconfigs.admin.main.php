<?php

/**
 * plugin Custom Configs for Cotonti Siena
 * 
 * @package customconfigs
 * @version 1.0.0
 * @author esclkm
 * @copyright 
 * @license BSD
 *  */
// Generated by Cotonti developer tool (littledev.ru)
defined('COT_CODE') or die('Wrong URL.');
/* @var $db CotDB */
/* @var $cache Cache */
/* @var $t Xtemplate */

//$adminpath[] = $L['Custom_configs'];
$rows = ccfg::cat_list();
foreach ($rows as $row)
{
	$t->assign(array(
		'TITLE' => $row['configcat_title'],
		'HREF' => cot_url('admin', array('m' => 'other', 'p' => 'customconfigs', 'n' => 'set', 'c' => $row['configcat_name'])),
		'DESC' => cot_parse($row['configcat_desc'])
	));
	$t->parse('MAIN.ROW');
}
if(!count($rows))
{
	$t->parse('MAIN.NOROW');
}
$t->assign(array(
	'EDITHREF' => cot_url('admin', array('m' => 'other', 'p' => 'customconfigs', 'n' => 'editcat')),
));