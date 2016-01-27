<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Dashboard_Frontend {

	public function action_index()
	{

        $view = View::factory('dashboard/main');
        $this->template->content = $view;
                        
	}

}
