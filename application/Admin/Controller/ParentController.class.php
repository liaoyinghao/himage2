<?php
/*
	概    要:  后台管理 - 父类创建模块;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/10;
	修改时间:  ;
*/
namespace Admin\Controller;
use Think\Controller;

class ParentController extends Controller
{
		public function _initialize()
		{
			$userInfo=$_SESSION["userInfo"];
			
			if(empty($userInfo))
			{
				$this->redirect("Login/index");
				exit();
			}
			$this->assign("user_id",$userInfo['user_id']);
			$this->assign("user_name",$userInfo['user_name']);
			$this->assign("user_type",$userInfo['user_type']);
			$this->assign("user_account",$userInfo['user_account']);
		}
}