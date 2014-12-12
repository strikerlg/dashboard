<?php namespace Syn\Dashboard\Controllers;

use Syn\Framework\Abstracts\Controller;

class DashboardController extends Controller
{
	public function home()
	{
		$this -> title = trans('title.home');
		if($this->getVisitor())
			return $this -> view('pages.dashboard.realtime-feed', ['icon' => 'home']);
		else
			return $this -> view('pages.dashboard.home', ['icon' => 'home']);
	}
}