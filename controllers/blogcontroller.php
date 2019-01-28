<?php
 
class BLogController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{				
		$this->_view->set('page','Blog');
        $this->_view->set('pagetitle', 'Blog');
        $this->_view->set('breadcrumb', '<a href="../">Home</a><i> > </i><a href="./">BLog</a>');
		return $this->_view->output();		
	}

	
}
?>