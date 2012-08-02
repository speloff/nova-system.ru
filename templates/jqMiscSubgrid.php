<script>
var opts = {
	subGrid: true,
	subGridRowExpanded: function(subgrid_id, row_id) 
	{
		$('#'+subgrid_id)
			.append('<table id="jqMiscSubgrid2'+row_id+'"></table>')
			.append('<div id="jqMiscSubgrid2'+row_id+'_p"></div>');
		
		$.ajax({
			url: $(this).getGridParam('url'),
			dataType: 'script',
			data: {'oper' : 'renderSubgrid', 'customer_id' : row_id}
		});
	}
};

<?= $rendered_grid ?>
</script>