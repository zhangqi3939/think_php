<?php
namespace app\index\controller;
use think\Controller;
class index extends controller
{
	public function index()
	{
		$data = input('post.');
		$userName = $data['userName'];
		dump($userName);
	}

}
