<!DOCTYPE html>
<html>
<head>
	<title>Таблицы</title>

	<!--jQuery-->
	<script src="/js/jquery.min.js"></script>

	<!--jQuery UI-->
	<script src="/js/jquery-ui-1.8.22.custom.min.js"></script>
	<link href="/css/custom-theme/jquery-ui-1.8.22.custom.css" rel="stylesheet" type="text/css" />
	
	<script src="/plugins/ui.multiselect.js"></script>
	<link href="/plugins/ui.multiselect.css" rel="stylesheet" type="text/css" />

	<!--jqGrid-->
	<link href="/css/ui.jqgrid.css" rel="stylesheet" type="text/css" />
	<script src="/js/i18n/grid.locale-ru.js"></script>
    	<script src="/js/jquery.jqGrid.min.js"></script>

	<!--jqGrid Extension-->
	<link href="/css/jqgrid-ext.css" rel="stylesheet" type="text/css" />
    	<script src="/js/jqgrid-ext.js"></script>
	
	<!-- Other plugins -->
	<script src="http://yandex.st/jquery/form/2.67/jquery.form.min.js"></script>
	
	<!-- Code highlighter -->
	<script src="/js/highlight.pack.js"></script>
	<link href="/css/vs.css" rel="stylesheet" type="text/css" />
	
	<link rel="icon" href="misc/favicon.png" type="image/png"> 
	
	<script>
	$.extend($.jgrid.defaults,
	{
		altRows: false,
		altclass: 'altrow',
		
		hidegrid: false,
		hoverrows: false,
		
		viewrecords: true,
		scrollOffset: 21,

		width: 800,
		height: 600
	});
	
	//$.jgrid.defaults.height = '400px';
	$.jgrid.nav.refreshtext = 'Refresh';
	$.jgrid.formatter.date.newformat = 'ISO8601Short';
	
	$.jgrid.edit.closeAfterEdit = true;
	$.jgrid.edit.closeAfterAdd = true;
	
	$(function()
	{
		$('#tabs-info').html($('#descr_rus').html());
	
		$('#accordion').accordion({
			'animated' : false,
			'navigation' : true
		});
		
		$('#tabs').tabs();
		
		hljs.tabReplace = '    ';
		hljs.initHighlightingOnLoad();
	});
	</script>
	
	<style>
	bode {font-size: 11px;}
	<?php if(!isset($_REQUEST['iframe'])) : ?>body {background: #F5F5F5; font-size: 11px; padding: 10px;}<?php endif;?>
	#descr {display: none;}
	#descr_rus {display: none;}
	
	#accordion UL {padding: 0; margin: 0; list-style-type: circle;}
	#accordion UL A {text-decoration: none; font-size: 11px;}
	#accordion UL A:hover {text-decoration: underline;}
	#accordion UL LI.active {list-style-type: disc;}
	
	.ui-widget {font-family: verdana; font-size: 12px;}

	.ui-jqgrid {font-family: tahoma, arial;}
	.ui-jqgrid TR.jqgrow TD {font-size: 11px;}
	.ui-jqgrid TR.jqgrow TD {padding-left: 5px; padding-right: 5px;}
	.ui-jqgrid TR.jqgrow A {color: blue;}

	.ui-jqgrid INPUT,
	.ui-jqgrid SELECT,
	.ui-jqgrid TEXTAREA, 
	.ui-jqgrid BUTTON {font-family: tahoma, arial;}
	</style>
</head>

<body>
	<?php if(isset($_REQUEST['iframe'])) : ?>
	<?php require 'templates' . DIRECTORY_SEPARATOR . $grid . '.php'; ?>
	<?php else : ?>
	<table>
	<tr>
		<td width="260px" valign="top"><?php require 'templates' . DIRECTORY_SEPARATOR . '_accordion.php'; ?></td>
		<td valign="top" style="padding-left: 10px;">
			<?php require 'templates' . DIRECTORY_SEPARATOR . $grid . '.php'; ?>
			<?php require 'templates' . DIRECTORY_SEPARATOR . '_sources.php'; ?>
		</td>
	</tr>
	</table>
	<?php endif; ?>
</body>
</html>