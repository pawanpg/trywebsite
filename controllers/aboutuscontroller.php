<?php
 
class AboutUsController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{				
		$this->_view->set('page','about us');
        $this->_view->set('pagetitle', 'About Us');
        $this->_view->set('breadcrumb', '<a href="../">Home</a><i> > </i><a href="./">about us</a>');
		return $this->_view->output();		
	}

	
}
?>