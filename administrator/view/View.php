	<?php 

/**
* 
*/
class ViewAdmin
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/admin/header.php';
		include 'template/admin/sidebar.php';
		
	}

	protected function end()
	{

		// include_once 'content.php';
		include 'template/admin/footer.php';
		//include 'template/footer.php';
	}
	
}


 ?>