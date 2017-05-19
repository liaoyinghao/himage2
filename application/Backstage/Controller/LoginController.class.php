<?php
/*
	概    要:  照片系统 - 登录模块创建;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/8;
	修改时间:  ;
*/
namespace Backstage\Controller;
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
			$_SESSION["userMsg"] = $login;
			echo 1;
		}
		else
		{
			echo 2;
		}
	}
}
