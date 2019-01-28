<?php
 
class GalleryController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{				
		$this->_view->set('page','Gallery');
        $this->_view->set('pagetitle', 'Gallery');
        $this->_view->set('breadcrumb', '<a href="../">Home</a><i> > </i><a href="./">Gallery</a>');
		return $this->_view->output();		
	}

	
}
?>