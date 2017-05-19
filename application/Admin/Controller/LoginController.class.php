<?php
/*
	概    要:  后台管理 - 登录创建模块;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/10;
	修改时间:  ;
*/
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller

{
	public function index()
	{
		$this->display();
	}
	
	public function login()
	{
		$user_account = $_POST["user_account"];
		$user_pwd = $_POST["user_pwd"];
		$login=M('user')->where(" user_account='".$user_account."' and user_pwd='".$user_pwd."'")->find();

		if(isset($login['user_id']))
		{
			$_SESSION["userInfo"] = $login;
			echo 1;
		}
		else
		{
			echo 2;
		}
	}
}
