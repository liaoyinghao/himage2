<?php
/*
	概    要:  照片系统 - 首页模块创建;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/8;
	修改时间:  ;
*/
namespace Backstage\Controller;
class IndexController extends ParentController
{
    public function index()
    {
    	$showitem =  M('item')->order('item_time')->select();
		$item = M('item')->count();
		$this->assign("showitem",$showitem);
		$this->assign("item",$item);
		$this->display();
    }
    public function upimg($i)
    {
    	$this->assign("i",$i);
		$this->display();
    }
	
	public function ajax_upload()
	{
		ajax_upload('/Upload/image/');
	}
	
	public function action($i)
	{

		if(empty($_POST['image'])&&empty($_POST['file']))
		{
			echo "当前没有图片上传 无法进行后续操作";
			exit;
		}
		$img_iid = $i;
		$img_tid = "";
		$img_type = 0;
		$img_time = time();
		foreach ($_POST['image'] as $key => $value) {
			$data = array(
				"img_add"=>$value,
				"img_time"=>$img_time,
				"img_type"=>$img_type,
				"img_tid"=>$img_tid,
				"img_iid"=>$img_iid
				);
			$result = M('img')->add($data);	
		}
		if ($result!=false) {
			$this->redirect("Index/upimg",array('i'=>$i));
		}else{
			echo "出错";
		}

	} 
}