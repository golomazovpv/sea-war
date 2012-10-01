<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Basic {

	public function action_index()
	{
		$this->template->title = 'Вход';
	}

} 