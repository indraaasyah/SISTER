	<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/header.php';
		include 'template/sidebar.php';
		
	}

	protected function end()
	{

		// include_once 'content.php';
		include 'template/footer.php';
		//include 'template/footer.php';
	}
	
}


 ?>