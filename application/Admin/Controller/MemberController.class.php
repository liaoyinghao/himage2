<?php
/*
	概    要:  后台管理 - 成员管理模块创建;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/16;
	修改时间:  ;
*/
namespace Admin\Controller;
use Think\Upload;

class MemberController extends ParentController
{
	public function up($d)
	{
		$result = M("user")->where("user_id = '{$d}'")->save($_POST);
		if($result==1)
		{
			$this->redirect("Member/index");
		}else{
			echo "出现问题";
		}
	}

	public function modify($d)
	{
		$result = M('user')->where("user_id = '{$d}'")->find();
		$this->assign("result",$result);
		$this->display();
	}

	public function del($d)
	{
		$result = M('user')->where("user_id='{$d}'")->delete();
		if($result==1)
		{
			$this->redirect("Member/index");
		}else{
			echo "出现问题";
		}
	}

	public function add()
	{
		$user_name = $_POST['user_name'];
		$user_account = $_POST['user_account'];
		$user_pwd = $_POST['user_pwd'];
		$user_type = $_POST['user_type'];
		if($user_type==0)
		{
			$user_typename = "管理员";
		}else{
			$user_typename = "摄影师";
		}
		$data = array(
			"user_name"=>$user_name,
			"user_account"=>$user_account,
			"user_pwd"=>$user_pwd,
			"user_type"=>$user_type,
			"user_typename"=>$user_typename
			);
		var_dump($data);
		$result = M('user')->add($data);
		if($result==0)
		{
			echo "出现问题";
		}else{
			$this->redirect("Member/index");
		}
	}

	public function ad()
	{
		$this->display();
	}

	public function index()
	{
		$count = M('user')->count();
		$user = M('user')->select();
		$this->assign("user",$user);
		$this->assign("count",$count);
		$this->display();
	}
}