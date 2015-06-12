<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	protected $groupsAllowed = array();

	function __construct()
	{
		parent::__construct();

		if(count($this->groupsAllowed) != 0)
		{
			if($this->aauth->is_loggedin())
			{
				$foundPerm = false;
				foreach($this->groupsAllowed as $groupAllowed)
				{
					if($this->aauth->is_member($groupAllowed))
					{
						$foundPerm = true;
					}
				}
				if(!$foundPerm)
				{
					$this->redirect403();
				}				
			}
			else
			{
				$this->redirect403();
			}
		}
	}

	private function redirect403()
	{
		echo "<h1>You shall not pass !</h1>";
		echo "<br>";
		echo "<img src=".img_url('403.gif')." />";
		redirect('/', 'refresh', null, 4);
	}
}