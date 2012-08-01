<?php

class jqExceptionOutput extends jqGrid
{
	protected function init()
	{
		#Set database table
		$this->table = 'tbl_customer';

		#Make all columns editable by default
		$this->cols_default = array('editable' => true);

		#Set columns
		$this->cols = array(
			
			'id'        =>array('label' => 'ID',
								'width' => 10,
								'align' => 'center',
								'editable' => false, //id is non-editable
								),

			'first_name'=>array('label' => 'First name',
								'width'	=> 35,
								'editrules' => array('required' => true),
								'formoptions' => array('suffix' => 'gg'),
								),

			'last_name' =>array('label' => 'Last name',
								'width' => 35,
								'editrules' => array('required' => true),
								),

			'email'     =>array('label' => 'Email',
								'width' => 30,
								'editrules' => array('email' => true),
								),

			'phone'     =>array('label' => 'Phone',
								'width'	=> 25,
								'align' => 'center',
								),

			'discount'	=>array('label' => 'Discount',
								'width'	=> 15,
								'formatter' => 'numeric',
								'align'	=> 'center',
								'editable' => false,
								),
		);

		#Set nav
		$this->nav = array('add' => true, 'edit' => false, 'del' => false);
	}
	
	protected function search()
	{
		if($this->input['first_name'])
		{
			throw new jqGrid_Exception('You cannot use filter for field "first_name"');
		}
	
		parent::search();
	}
}