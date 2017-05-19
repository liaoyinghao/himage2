<?php
namespace Org\Util;
//定义三个常量 分别用于存储APP KEY,APP Sercet以及回调地址CALLBACK
define('WB_KEY', '525698779');
define('WB_SEC', '72f74301b4a6010d047b889853c4b307');
define('CALLBACK','http://zc.aienn.cn/callback.php');

/* 
 * 调试输出函数 可以省略不写
 * @param mix $val 调试输出源数据
 * @param bool $dump 是否启用VAR_DUMP调试
 * @param bool $exit 是否在调试结束后设置断点
 * @param void
 */
function debug($val,$dump=FALSE,$exit=TRUE)
{
	//自动获取调试函数名称$func
	if($dump)
	{
		$func = "var_dump";
	}
	else 
	{
		$func = (is_array($val)||is_object($val))?'print_r':'printf';
	}
	//输出到HTML
	header("Content-type:text/html;charset=utf-8");
	echo '<pre>debug output;<hr/>';
	$func($val);
	echo '</pre>';
	if($exit)exit;
}