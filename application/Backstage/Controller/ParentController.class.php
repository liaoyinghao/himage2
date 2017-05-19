<?php
/*
	概    要:  照片系统 - 父类模块创建;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/8;
	修改时间:  ;
*/
namespace Backstage\Controller;
use Think\Controller;

class ParentController extends Controller
{
		public function _initialize()
		{
			$userMsg=$_SESSION["userMsg"];
			
			if(empty($userMsg))
			{
				$this->redirect("Login/index");
				exit();
			}
			$this->assign("user_id",$userMsg['user_id']);
			$this->assign("user_name",$userMsg['user_name']);
			$this->assign("user_type",$userMsg['user_type']);
			$this->assign("user_account",$userMsg['user_account']);
		}
}