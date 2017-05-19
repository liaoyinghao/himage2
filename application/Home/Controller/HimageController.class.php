<?php

namespace Home\Controller;
use Think\Controller;
class HimageController extends Controller
{
	public function getzan()
	{
		//你没理解我的意思 我之前是说你直接给前端该图片赞+1 感觉你一直不理解是什么意思 我给你写接口你自己局部刷新把
		$img_add = substr($_POST['i'],-42);
		$zan = M('img')->field('img_z')->where("img_add = '{$img_add}'")->find();
		echo json_encode($zan['img_z']);
		// 返回是赞数量？img_z恩
		exit; 

	}
	public function getDz()
	{
		//用户ip
		if (getenv("HTTP_CLIENT_IP"))  
	        	$ip = getenv("HTTP_CLIENT_IP");  
	    	else if(getenv("HTTP_X_FORWARDED_FOR"))  
	        	$ip = getenv("HTTP_X_FORWARDED_FOR");  
	    	else if(getenv("REMOTE_ADDR"))  
	        	$ip = getenv("REMOTE_ADDR");  
	    	else $ip = "Unknow";
	    	//点赞对应的图片及相关信息
		$newname = substr($_POST['i'],-42);
		$self = M('img')->field("img_iid,img_id,img_z")->where("img_add = '{$newname}'")->find();

		$zanold = $self['img_z']; 
		$zan_iid = $self['img_iid'];
		$zan_imgid = $self['img_id'];
		//获取当前时间
		$zan_time = time();
    	$data = array(
    		"zan_iid" => $zan_iid,
    		"zan_ip" => $ip,
    		"zan_imgid" => $zan_imgid,
    		"zan_time" => $zan_time
    		);
    	$zannew = $zanold + 1;
    	$zan = array(
    		"img_z" => $zannew
    		);
    	//当前时间
    	$newstime = time();
    	//十分钟前时间
    	$oldstime = $newstime - 600;
    	//如果点赞是同一张图片 并且ip同样且在10分钟以内 不允许 
    	//首先查询当前ip对应该张图片的最后一次点击的时间
    	$zh = M('zan')->field("zan_time,zan_ip")->where("zan_imgid ={$zan_imgid} && zan_ip = '{$ip}'")->order('zan_time desc')->limit(0,1)->find();
    	$soip = $zh['zan_ip'];
    	$sotime =(int) $zh['zan_time'];
    	//sotime 是当时的时间 oldstime是当前时间减去600秒钟
    	if($zh==NULL){
    		$result = M('zan')->add($data);
	    	if($result!=0)
	    	{
	    		$z = M('img')->where("img_id = '{$zan_imgid}'")->save($zan);
	    		if($z==1)
	    		{
	    			echo "点赞成功";
	    		}else{
	    			echo "点赞失败";
	    		}
	    	}
    	}
    	else if($zh!=null && $soip==$ip && $sotime<=$oldstime)
    	{
    		$result = M('zan')->add($data);
	    	if($result!=0)
	    	{
	    		$z = M('img')->where("img_id = '{$zan_imgid}'")->save($zan);
	    		if($z==1)
	    		{
	    			echo "点赞成功";
	    		}else{
	    			echo "点赞失败";
	    		}
	    	}
    	}else{
    		echo "请勿重复点赞";
    	}
    	exit;
	}

	public function getEwm($i,$t)
	{
		$ewm = M('ewm')->where("ewm_iid = {$i}")->find();
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$ewma = $ewm['ewm_add'];
		$ewmadd = $http.$host."/Upload/ewm/".$ewma;
		echo json_encode($ewmadd);
		exit;
	}

	public function sj($i,$t)
	{
		$ti = M("item")->where("item_id = '{$i}'")->find();
		$title = $ti['item_name'];
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$contact = $http.$host."/index.php/Himage/contact/i/".$i."/t/".$t.".html";
		$home = $http.$host."/index.php/Himage/index/i/".$i."/t/".$t.".html";
		$dz = $http.$host."/index.php/Himage/dz/i/".$i."/t/".$t.".html";
		$this->assign("title",$title);
		$this->assign("home",$home);
		$this->assign("contact",$contact);
		$this->assign("dz",$dz);
		$this->assign("i",$i);
		$this->assign("t",$t);
		$this->display();
	}

	public function dz($i,$t)
	{
		$ti = M("item")->where("item_id = '{$i}'")->find();
		$title = $ti['item_name'];
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$contact = $http.$host."/index.php/Himage/contact/i/".$i."/t/".$t.".html";
		$home = $http.$host."/index.php/Himage/index/i/".$i."/t/".$t.".html";
		$sj = $http.$host."/index.php/Himage/sj/i/".$i."/t/".$t.".html";
		$this->assign("title",$title);
		$this->assign("home",$home);
		$this->assign("contact",$contact);
		$this->assign("sj",$sj);
		$this->assign("i",$i);
		$this->assign("t",$t);
		$this->display();
	}

	public function contact($i,$t)
	{
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$home = $http.$host."/index.php/Himage/index/i/".$i."/t/".$t.".html";
		$dz = $http.$host."/index.php/Himage/dz/i/".$i."/t/".$t.".html";
		$sj = $http.$host."/index.php/Himage/sj/i/".$i."/t/".$t.".html";

		$this->assign("home",$home);
		$this->assign("contact",$contact);
		$this->assign("dz",$dz);
		$this->assign("sj",$sj);
		$this->assign("i",$i);
		$this->assign("t",$t);
		$this->display();
	}

	public function index($i,$t)
	{
		$ti = M("item")->where("item_id = '{$i}'")->find();
		$title = $ti['item_name'];
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$contact = $http.$host."/index.php/Himage/contact/i/".$i."/t/".$t.".html";
		$dz = $http.$host."/index.php/Himage/dz/i/".$i."/t/".$t.".html";
		$sj = $http.$host."/index.php/Himage/sj/i/".$i."/t/".$t.".html";
		$wx = M('weixin')->where("wx_iid = {$i}")->find();
		$wx_title = $wx['wx_title'];
		$wx_desc = $wx['wx_desc'];
		$wx_imgUrl = $wx['wx_imgUrl'];
		$wx_link = $wx['wx_link'];
		$this->assign("wx_title",$wx_title);
		$this->assign("wx_desc",$wx_desc);
		$this->assign("wx_imgUrl",$wx_imgUrl);
		$this->assign("wx_link",$wx_link);
		$this->assign("contact",$contact);
		$this->assign("dz",$dz);
		$this->assign("sj",$sj);
		$this->assign("title",$title);
		$this->assign("i",$i);
		$this->assign("t",$t);
		$this->display();
	}

	public function ZanImg()
	{
		$i = $_POST['i'];
		$t = $_POST['t'];
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$img = M('img')->field("img_add")->where("img_iid = '{$i}'&&img_tid = '{$t}'")->order('img_z  desc')->select();
		foreach ($img as $key => $value) {
			$img[$key] = $http.$host.$value['img_add'];
		}
		echo json_encode($img);
		exit;
	}

	

	public function getImg()
	{
		$i = $_POST['i'];
		$t = $_POST['t'];
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$img = M('img')->field("img_add,img_z")->where("img_iid = '{$i}'&&img_tid = '{$t}'")->select();
		
		foreach ($img as $key => $value) {
			$img[$key]['img_add'] = $http.$host.$value['img_add'];
			$img[$key]['img_z'] = $value['img_z'];
		}
		echo json_encode($img);
		exit;
	}

	public function getPt()
	{
		$data = array();
		$pics = $_POST['img_add'];
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		foreach ($pics as $key => $value) 
		{
			$img_info = getimagesize($value);
		          $file = $value;
		          $maxWidth = 667;
		          if($img_info['0']>$maxWidth){
		        	$newname = substr($value,-17);
		        	$im = imagecreatefromjpeg($file);
					$rate = $maxWidth/$img_info[0];
					$maxHeight = floor($img_info[1]*$rate);
					$des_im = imagecreatetruecolor($maxWidth,$maxHeight);
					imagecopyresized(
					$des_im,$im,0,0,0,0,$maxWidth,$maxHeight,$img_info[0],$img_info[1]);
					imagejpeg($des_im,'./Upload/ls/'.$newname);
					$data[$key] = $http.$host.'/Upload/ls/'.$newname;
		          }else{
		        	  $data[$key] = $value;
		          }
		}
		// var_dump($_POST);exit;
		$height_max = 0;
	    	$pics_new = array();
	    	foreach ($data as $k => $v) 
	    	{
		        $img_info = getimagesize($v);
		        $widths[] = $img_info[0];
		        $height_max += $img_info[1];
		        $pics_new[$k]['pic'] = $v;
		        $pics_new[$k]['width'] = $img_info[0];
		        $pics_new[$k]['height'] = $img_info[1];
	    	}
		    $width_max = max($widths);
		    $merge_img = imagecreatetruecolor($width_max, $height_max);
		    $trans_colour = imagecolorallocatealpha($merge_img, 255, 255, 255, 127);
		    imagefill($merge_img, 0, 0, $trans_colour);
		    $height = 0;
		    foreach ($pics_new as $k => $v) {
		        if ($k == 0) {
		            imagecopyresized($merge_img, imagecreatefromjpeg($v['pic']), 0, 0, 0, 0, $v['width'], $v['height'], $v['width'], $v['height']);
		        } else {
		            imagecopyresized($merge_img, imagecreatefromjpeg($v['pic']), 0, $height, 0, 0, $v['width'], $height, $v['width'], $height);
		        }

		        $height += $v['height'];
			}
			$now = time();
			$imgname = $now.rand(111,999);
			$pic_heti = './Upload/ht/'.$imgname.'.jpg';
			imagejpeg($merge_img, $pic_heti);
			$pname = substr($pic_heti,-28);
			$ptname = $http.$host.$pname;
			echo json_encode($ptname);
			exit;
	}

	public function getWe()
	{
		$we = M('we')->field("we_logo,we_back,we_name,we_phone")->where("we_id = 1")->find();
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$data = array();
		
		$we_logo = $http.$host.'/Upload/We/'.$we['we_logo'];
		$we_back = $http.$host.'/Upload/We/'.$we['we_back'];
		$we_name = $we['we_name'];
		$we_phone = $we['we_phone'];
		$data = array(
			"we_logo"=>$we_logo,
			"we_back"=>$we_back,
			"we_name"=>$we_name,
			"we_phone"=>$we_phone
		);
		echo json_encode($data);
		exit;
	}

	public function timeImg()
	{
		$i = $_POST['i'];
		$t = $_POST['t'];
		$http = "http://";
		$host = $_SERVER['HTTP_HOST'];
		$img = M('img')->field("img_add")->where("img_iid = '{$i}'&&img_tid = '{$t}'")->order('img_time desc')->select();
		foreach ($img as $key => $value) {
			$img[$key] = $http.$host.$value['img_add'];
		}
		echo json_encode($img);
		exit;
	}

	public function getTitle()
	{
		$i = $_POST['i'];
		$host = $_SERVER['HTTP_HOST'];
		$http = "http://";
		$title = M('title')->field("title_count,title_link,title_id")->where("title_iid = '{$i}'")->select();
		$len = count($title);
		$data = array();
		foreach ($title as $key => $value) {
			for($i = 0;$i<$len;$i+=2){
			    $data[] = array(
			        'title_count' => $value['title_count'],
			        'title_link' => $http.$host.'/index.php/Himage/index/i/'.$_POST['i'].'/t/'.$value['title_id'].".html"
			    );
			}
		}
		echo json_encode($data);
		exit;
	}

	public function getBanner()
	{
		$i = $_POST['i'];
		$t = $_POST['t'];
		$item = M('item')->field("item_banner_img")->where("item_id = '{$i}'")->find();
		$host = $_SERVER['HTTP_HOST'];
		$http = "http://";
		$banner = $http.$host.'/Upload/banner/'.$item['item_banner_img'];
		echo json_encode($banner);
		exit();
	}

	
	public function sort()
	{
		$this->display();
	}
}
