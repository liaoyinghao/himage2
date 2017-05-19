<?php
/*
	概    要:  后台管理 - 首页创建模块;
	作    者:  清欢 - zhaoqinghuan0704@163.com;
	创建时间:  2017/4/10;
	修改时间:  ;
*/
namespace Admin\Controller;
class IndexController extends ParentController
{
    public function index()
    { 
    	$this->redirect("Item/index");
    }
}