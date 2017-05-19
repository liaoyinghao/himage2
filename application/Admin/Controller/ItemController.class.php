<?php
/*
	概    要:  后台管理 - 项目创建模块;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/10;
	修改时间:  ;
*/
namespace Admin\Controller;
use Think\Upload;

class ItemController extends ParentController
{
	public function ewmd($i)
	{
		$dewm = M("ewm")->where("ewm_iid = '{$i}'")->find();
		$add = $dewm['ewm_add'];
		$src = './Upload/ewm/'.$add;
		$arr = array(
			"i"=>$i
			);
		if(unlink($src))
		{
			$result = M('ewm')->where("ewm_iid = '$i'")->delete();
			if($result==1)
			{
				$this->redirect("Item/ewm",$arr);
			}
		}
	}

	public function ewmad($i)
	{
		$upload = new Upload();
		$upload->maxSize   = 3145728 ;
		$upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath  = './Upload/ewm/';
		$info = $upload->upload();
		$savename = $info['ewm_add']['savename'];
		$savepath = $info['ewm_add']['savepath'];
		$ewm_add = $savepath.$savename;
		$data = array(
			"ewm_add"=>$ewm_add,
			"ewm_iid"=>$i
			);
		$arr = array(
			"i"=>$i
			);
		$reult = M('ewm')->add($data);
		if($reult!=0)
		{
			$this->redirect("Item/ewm",$arr);
		}
	}

	public function ewm($i)
	{
		$title = M('item')->where("item_id = '$i'")->find();
		$ewm = M('ewm')->where("ewm_iid = '$i'")->find();
		$this->assign('ewm',$ewm);
		$this->assign("i",$i);
		$this->assign("title",$title);
		$this->display();
	}

	public function wxd($i)
	{
		$result = M('weixin')->where("wx_iid = '$i'")->find();
		$src = substr($result['wx_imgUrl'], -42);
		$img = ".".$src;
		$arr = array(
			"i"=>$i
			);
		if(unlink($img))
		{
			$del = M('weixin')->where("wx_iid = '$i'")->delete();
			if($del ==1)
			{
				$this->redirect("Item/wx",$arr);
			}
		}

	}

	public function wxtj($i)
	{
		$upload = new Upload();
		$upload->maxSize   = 3145728 ;
		$upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath  = './Upload/wximg/';
		$info = $upload->upload();
		$savename = $info['wx_img']['savename'];
		$savepath = $info['wx_img']['savepath'];
		$img = $savepath.$savename;
		$wx_iid = $i;
		$wx_tid = $_POST['wx_link'];
		$i = M('item')->where("item_id = '$wx_iid'")->find();
		$ilink = $i['item_id'];
		$t = M('title')->where("title_id = '$wx_tid'")->find();
		$tlink = $t['title_id'];
		$z = "/index.php/Himage/index/";
		$host = $_SERVER['HTTP_HOST'];
		$http = "http://";
		$src = "/Upload/wximg/";
		$wx_link = $http.$host.$z."i/".$ilink."/"."t/".$tlink.".html";
		$wx_imgUrl = $http.$host.$src.$img;
		$wx_title = $_POST['wx_title'];
		$wx_desc = $_POST['wx_desc'];
		$data = array(
			"wx_title" => $wx_title,
			"wx_imgUrl" => $wx_imgUrl,
			"wx_desc" => $wx_desc,
			"wx_iid" => $wx_iid,
			"wx_tid" => $wx_tid,
			"wx_link" =>$wx_link
			);
		$arr = array(
			"i"=>$wx_iid
			);
		$result = M('weixin')->add($data);
		if($result!=0)
		{
			$this->redirect("Item/wx",$arr);
		}else{
			echo "出现错误";
		}
	}

	public function wxnew($i)
	{
		$title = M('title')->where("title_iid = '$i'")->select();
		$this->assign("title",$title);
		$this->assign("i",$i);
		$this->display();
	}

	public function wx($i)
	{
		$title = M('item')->where("item_id = '$i'")->find();
		$name = M('title')->where("title_iid = '$i'")->select();
		$wx = M('weixin')->where("wx_iid = '$i'")->find();
		$this->assign("wx",$wx);
		$this->assign("i",$i);
		$this->assign("name",$name);
		$this->assign("title",$title);
		$this->display();
	}

	public function dyt($img_id)
	{
		$result = M('img')->where("img_id = '{$img_id}'")->find();
		$data = array(
			'item_id'=>$result['img_iid']
			);
		$src = ".".$result['img_add'];
		$del = M('img')->where("img_id = '{$img_id}'")->delete();
		if($del==1)
		{
			if(unlink("$src"))
			{
				$this->redirect("Item/yt",$data);
			}
		}
	}

	public function yt($item_id)
	{
		$it = M('item')->where("item_id = '{$item_id}'")->find();
		$im = M('img')->where("img_iid = '{$item_id}' && img_type = 0")->select();
		$this->assign("im",$im);
		$this->assign("it",$it);
		$this->display();
	}

	public function delete($item_id)
	{

		$imgs = M('img')->where("img_iid = {$item_id}")->select();
		$ewm = M('ewm')->where("ewm_iid = '{$item_id}'")->find();
		$wx = M('weixin')->where("wx_iid = '{$item_id}'")->find();
		if(!empty($imgs))
		{
			foreach ($imgs as $key => $value)
			{
				$imgadd = ".".$value['img_add'];
				$img = unlink($imgadd);
			}
				$deli = M('img')->where("img_iid = '{$item_id}'")->delete();
				$delt = M('title')->where("title_iid = '{$item_id}'")->delete();
				$delit = M('item')->where("item_id = '{$item_id}'")->delete();
				if(!empty($ewm['ewm_add']))
				{
					$ewmadd = "./Upload/ewm/".$ewm['ewm_add'];
					if(unlink("$ewmadd"))
					{
						$delewm = M('ewm')->where("ewm_iid = '{$item_id}'")->delete();
					}
				}
				if(!empty($wx['wx_imgUrl']))
				{
					$src = substr($wx['wx_imgUrl'], -42);
					$img = ".".$src;
					if(unlink("$img"))
					{
						$delewm = M('weixin')->where("wx_iid = '{$item_id}'")->delete();
					}
				}
				
		}else{
			$delit = M('item')->where("item_id = '{$item_id}'")->delete();
		}
		if(!empty($delit))
		{
			$this->redirect("Item/index");
		}

	}

	public function adtitle($item_id)
	{
		$data = array(
			"title_iid" => $item_id,
			"title_count" => $_POST['title_count'],
			"title_link" =>$_POST['title_link']
			);
		$da = array(
			"item_id"=>$item_id
			);
		$result = M('title')->add($data);
		if (!empty($result)) 
		{
			$this->redirect("Item/showtitle",$da);
		}
	}

	public function addtitle($itemid)
	{
		$onItem = M('item')->where("item_id = '{$itemid}'")->find();
		$this->assign("onItem",$onItem);
		$this->display();
	}

	public function deltitle($titleid)
	{
		$item = M('title')->where("title_id = '{$titleid}'")->find();
		$imgs = M('img')->where("img_tid = '{$titleid}'")->select();
		if(!empty($imgs))
		{
			foreach ($imgs as $key => $value)
			{
				$src = ".".$value['img_add'];
				if(unlink("$src"))
				{
					$result = M('img')->where("img_tid = '{$titleid}'")->delete();
				}
			}
			if(empty($result))
			{
				$delt = M('title')->where("title_id = '{$titleid}'")->delete();
				
			}
		}else{
			$delt = M('title')->where("title_id = '{$titleid}'")->delete();
		}

		$data = array(
				"item_id"=>$item['title_iid']
		);
		if($delt!=0)
		{
			$this->redirect("Item/showtitle",$data);
		}
	}

	public function uptitle($title_id)
	{
		$on = M('title')->where("title_id={$title_id}")->find();
		$result = M('title')->where("title_id={$title_id}")->save($_POST);
		$data = array(
			"item_id" => $on['title_iid']
			);
		if(!empty($result))
		{
			$this->redirect("Item/showtitle",$data);
		}else{
			echo "失败";
		}
	}

	public function edittitle($titleid)
	{
		$showOne = M('title')->where("title_id='{$titleid}'")->find();
		$onItem = M('item')->where("item_id = '{$showOne['title_iid']}'")->find();
		$this->assign("onItem",$onItem);
		$this->assign("showOne",$showOne);
		$this->display();
	}

	public function deleteimg($img_id)
	{
		$result = M('img')->where("img_id = '{$img_id}'")->find();
		$data = array(
			'titleid'=>$result['img_tid']
			);
		$src = ".".$result['img_add'];
		$del = M('img')->where("img_id = '{$img_id}'")->delete();
		if($del==1)
		{
			if(unlink("$src"))
			{
				$this->redirect("Item/showimg",$data);
			}
		}
	}

	public function delimg($id)
	{
		$showitem =  M('item')->where("item_id='{$id}'")->find();
		$src = "./Upload/banner/".$showitem['item_banner_img'];
		$data = array(
			"item_id"=>$id
			);
		$now = time();
		$img = "placeholder.png";
		$do = array(
			"item_time"=>$now,
			"item_banner_img"=>$img
			);
		$result = M('item')->where("item_id='{$id}'")->save($do);
		if($result==1)
		{
			if(unlink("$src"))
			{
				$this->redirect("Item/edit",$data);
			}
		}
	}

	public function ajax_upload()
	{
		ajax_upload('/Upload/image/');
	}
	
	public function action($img_tid,$img_iid)
	{

		if(empty($_POST['image'])&&empty($_POST['file']))
		{
			echo "请选择图片并点击上传后 在进行提交操作";
			exit;
		}
		
		$now = time();
		$type = 1;
		foreach ($_POST['image'] as $key => $value) {
			$data = array(
				"img_add"=>$value,
				"img_type"=>$type,
				"img_time"=>$now,
				"img_tid"=>$img_tid,
				"img_iid"=>$img_iid
				);
			$result = M('img')->add($data);	
		}
		if ($result!=false) {
			$this->redirect("Item/showimg",array('titleid'=>$img_tid));
		}
	}
	
	public function upimg($title_id)
	{
		$onzero = M('title as a')->join('item as b on a.title_iid=b.item_id')->where("title_id = '{$title_id}'")->find();
		$this->assign("onzero",$onzero);
		$this->display();
	}

	public function showimg($titleid)
	{
		$onzero = M('title as a')->join('item as b on a.title_iid=b.item_id')->where("title_id = '{$titleid}'")->find();
		$showImg = M('img')->where("img_tid = {$titleid}")->select();
		$this->assign("onzero",$onzero);
		$this->assign("showImg",$showImg);
		$this->display();
	}

	public function showtitle($item_id)
	{
		$showOne = M('item')->where("item_id='{$item_id}'")->find();
		$showAll = M('title')->where("title_iid='{$item_id}'")->select();
		$this->assign("showOne",$showOne);
		$this->assign("showAll",$showAll);
		$this->display();
	}

	public function index()
	{
		$showitem =  M('item')->select();
		$item = M('item')->count();
		$this->assign("showitem",$showitem);
		$this->assign("item",$item);
		$this->display();
	}
	
	public function addItem()
	{
		$upload = new Upload();
		$upload->maxSize   = 3145728 ;
		$upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath  = './Upload/banner/';
		$info = $upload->upload();
		$savename = $info['banner']['savename'];
		$savepath = $info['banner']['savepath'];
		$item_name = $_POST['name'];
		$item_time = time();
		$item_banner_img = $savepath.$savename;
		$item_link = $_POST['link'];
		$data = array(
			"item_name"=>$item_name,
			"item_time"=>$item_time,
			"item_banner_img"=>$item_banner_img,
			"item_link"=>$item_link
		);
		$additem = M('item')->add($data);
		if($additem!="")
		{
			$this->redirect("Item/index");
			exit();
		}
		else{
			echo "出现错误";	
		}

	}

	public function edit($item_id)
	{
		$showitem =  M('item')->where("item_id='{$item_id}'")->find();
		$zero = $showitem['item_banner_img'];
		$inImg = "placeholder.png";
		$this->assign("inImg",$inImg);
		$this->assign("zero",$zero);
		$this->assign("showitem",$showitem);
		$this->display();
	}

	public function onItem($id)
	{
		$upload = new Upload();
		$upload->maxSize   = 3145728 ;
		$upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath  = './Upload/banner/';
		$info = $upload->upload();
		$savename = $info['banner']['savename'];
		$savepath = $info['banner']['savepath'];
		$item_name = $_POST['name'];
		$item_time = time();
		$item_banner_img = $savepath.$savename;
		$item_link = $_POST['link'];

		$data = array(
			"item_name"=>$item_name,
			"item_time"=>$item_time,
			"item_banner_img"=>$item_banner_img,
			"item_link"=>$item_link
		);
		$additem = M('item')->where("item_id='{$id}'")->save($data);
		if($additem==1)
		{
			$this->redirect("Item/index");
			exit();
		}
		else{
			echo "出现错误";	
		}
	}
}