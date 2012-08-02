<?php

class days extends jqGrid
{
	protected function init()
	{
		#Set database table
		$this->table = 'days';

		#Set columns
		$this->cols = array(
			
			'date'  	=>array('label' => 'Дата',
								'width' => 25,
								'align' => 'center',
								),

			'doctor'	=>array('label' => 'Врач',
								'width'	=> 35,
								'editable' => true,
								),

			'clinic'	=>array('label' => 'Клиника',
								'width' => 35,
								'editable' => true,
								),

			'time'		=>array('label' => 'Время приёма',
								'width' => 25,
								'editable' => true,
								),

		);
	}
	
	protected function opRenderSubgrid()
	{
		echo $this->loader->render('clients', array('customer_id' => $this->input('customer_id')));
		exit;
	}
	
	protected function opEdit($id, $upd)
	{
		return true;
	}
}