<?php

class Controller_Main extends Controller_Application
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'ログインユーザ情報';
		$this->template->content = View::forge('main/index', $data);
	}

}
