<?php
require 'config.php';
require 'sections.php';

header("Content-Type: text/html; charset={$_CONFIG['encoding']};");

require_once($_CONFIG['root_path'] . 'jqGridLoader.php');

$jq_loader = new jqGridLoader();

$jq_loader->set('grid_path', 'grids' . DIRECTORY_SEPARATOR);

$jq_loader->set('pdo_dsn', $_CONFIG['pdo_dsn']);
$jq_loader->set('pdo_user', $_CONFIG['pdo_user']);
$jq_loader->set('pdo_pass', $_CONFIG['pdo_pass']);

$jq_loader->set('debug_output', true);

if(isset($_SERVER['HTTP_HOST']) and $_SERVER['HTTP_HOST'] == 'localhost')
{
	$jq_loader->addInitQuery("SET NAMES 'windows-1251'");
}

$jq_loader->autorun();

//-----------
// Get grid
//-----------

$grid = isset($_REQUEST['render']) ? $_REQUEST['render'] : 'days';
$grid = preg_replace('#[^a-zA-Z0-9_-]#', '', $grid); //safe

//Most examples use simple grids without extra params
$rendered_grid = $jq_loader->render($grid);

require 'templates/_layout.php';