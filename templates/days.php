<script>
var opts = {
	subGrid: true,
	subGridRowExpanded: function(subgrid_id, row_id) 
	{
		$('#'+subgrid_id)
			.append('<table id="clients'+row_id+'"></table>')
			.append('<div id="clients'+row_id+'_p"></div>');
		
		$.ajax({
			url: $(this).getGridParam('url'),
			dataType: 'script',
			data: {'cli_name' : 'renderSubgrid', 'customer_id' : row_id}
		});
	}
};

<?= $rendered_grid ?>
</script>
	
<div id="descr">
	Subgrid as grid example.
</div>

<div id="descr_rus">
	Пример таблицы в таблице. По просьбе с phpclub.ru.
</div>