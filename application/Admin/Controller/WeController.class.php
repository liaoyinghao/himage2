<?php
/*
	概    要:  后台管理 - 关于我们创建模块;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/16;
	修改时间:  ;
*/
namespace Admin\Controller;
use Think\Upload;

class WeController extends ParentController
{
	public function dback()
	{
		$back = M('we')->where("we_id = 1")->find();
		$src = $src = "./Upload/We/".$back['we_back'];

		$z = "123";
		$data = array(
			'we_back'=> $z
			);
		unlink("$src");
		$d = M('we')->where("we_id = 1")->save($data);
		$this->redirect("We/add");
		
	}

	public function dlogo()
	{
		$back = M('we')->where("we_id = 1")->find();
		$src = $src = "./Upload/We/".$back['we_logo'];

		$z = "123";
		$data = array(
			'we_logo'=> $z
			);
		unlink("$src");
		$d = M('we')->where("we_id = 1")->save($data);
		$this->redirect("We/add");
	}

	public function index()
	{
		$we = M('we')->where("we_id = 1")->find();
		$this->assign("we",$we);
		$this->display();
	}

	public function add()
	{
		$z = "123";
		$we = M('we')->where("we_id = 1")->find();
		$this->assign("z",$z);
		$this->assign("we",$we);
		$this->display();
	}

	public function on()
	{
		$upload = new Upload();
		$upload->maxSize   = 3145728 ;
		$upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath  = './Upload/We/';
		$info = $upload->upload();
		$logosavename = $info['logo']['savename'];
		$logosavepath = $info['logo']['savepath'];
		$backsavename = $info['back']['savename'];
		$backsavepath = $info['back']['savepath'];
		$logo = $logosavepath.$logosavename;
		$back = $backsavepath.$backsavename;
		$we_time = time();
		$we_name = $_POST['name'];
		$we_phone = $_POST['phone'];
		if($logo==""&&$back=="")
		{
			$data = array(
				"we_name"=>$we_name,
				"we_phone"=>$we_phone,
				"we_time"=>$we_time
			);
		}
		elseif($logo=="")
		{
			$data = array(
				"we_back"=>$back,
				"we_name"=>$we_name,
				"we_phone"=>$we_phone,
				"we_time"=>$we_time
			);
		}elseif ($back=="") 
		{
			$data = array(
				"we_logo"=>$logo,
				"we_name"=>$we_name,
				"we_phone"=>$we_phone,
				"we_time"=>$we_time
			);	
		}else{
			$data = array(
				"we_logo"=>$logo,
				"we_back"=>$back,
				"we_name"=>$we_name,
				"we_phone"=>$we_phone,
				"we_time"=>$we_time
			);
		}
		$addiWe= M('We')->where("we_id = 1")->save($data);
		if($addiWe==1)
		{
			$this->redirect("We/index");
			exit();
		}
		else{
			echo "出现错误";	
		}
	}
}