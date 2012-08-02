<?php

class jqMiscSubgrid extends jqGrid
{
	protected function init()
	{
		#Set database table
		$this->table = 'days';

		#Set columns
		$this->cols = array(
			
			'date'  	=>array('label' => '����',
								'width' => 25,
								'align' => 'center',
								),

			'doctor'	=>array('label' => '����',
								'width'	=> 35,
								'editable' => true,
								),

			'clinic'	=>array('label' => '�������',
								'width' => 35,
								'editable' => true,
								),

			'time'		=>array('label' => '����� �����',
								'width' => 25,
								'editable' => true,
								),

		);
	}
	
	protected function opRenderSubgrid()
	{
		echo $this->loader->render('jqMiscSubgrid2', array('customer_id' => $this->input('customer_id')));
		exit;
	}
	
	protected function opEdit($id, $upd)
	{
		return true;
	}
}