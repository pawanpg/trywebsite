<?php
 
class ContactController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{				
		$this->_view->set('page','contact');
        $this->_view->set('pagetitle', 'Contact');
        $this->_view->set('breadcrumb', '<a href="../">Home</a><i> > </i><a href="./">Contact</a>');
		return $this->_view->output();		
	}

	
}
?>