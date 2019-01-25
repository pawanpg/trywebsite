<?php
 
class ServiceController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{				
		$this->_view->set('page','Services');
        $this->_view->set('pagetitle', 'Services');
        $this->_view->set('breadcrumb', '<a href="../">Home</a><i> > </i><a href="./">Services</a>');
		return $this->_view->output();		
	}

	
}
?>