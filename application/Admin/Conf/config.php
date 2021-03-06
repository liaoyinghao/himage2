<?php
return array(
//'配置项'=>'配置值'
		/* 默认设定 */
		'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
		'DEFAULT_ACTION'        =>  'index', // 默认操作名称
		
		/* 数据库设置 */
		'DB_TYPE'               =>  'mysql',     // 数据库类型
		'DB_HOST'               =>  'localhost', // 服务器地址
		'DB_NAME'               =>  'demo',          // 数据库名
		'DB_USER'               =>  'root',      // 用户名
		'DB_PWD'                =>  'root',          // 密码
		'DB_PORT'               =>  '3306',        // 端口
		'DB_PREFIX'             =>  '',    // 数据库表前缀
		'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
		'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
		'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
		'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
		'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
		'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
		'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
		'DB_SQL_BUILD_CACHE'    =>  false, // 数据库查询的SQL创建缓存
		'DB_SQL_BUILD_QUEUE'    =>  'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc
		'DB_SQL_BUILD_LENGTH'   =>  20, // SQL缓存的队列长度
		'DB_SQL_LOG'            =>  false, // SQL执行日志记录
		'DB_BIND_PARAM'         =>  false, // 数据库写入数据自动参数绑定
		
		/* SESSION设置 */
		'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session
		
		
		
		/* 模板引擎设置 */
		
		'TMPL_ACTION_ERROR'     =>  'Public:success',		// 默认错误跳转对应的模板文件
		'TMPL_ACTION_SUCCESS'   =>  'Public:success',		// 默认成功跳转对应的模板文件
		'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀
		'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
		'TMPL_R_DELIM'          =>  '}',            // 模板引擎普通标签结束标记
		
		// Think模板引擎标签库相关设定
		'TAGLIB_BEGIN'          =>  '<',  // 标签库标签开始标记
		'TAGLIB_END'            =>  '>',  // 标签库标签结束标记
		
		/* URL设置 */
		'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
		'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
		// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
		'URL_HTML_SUFFIX'       =>  'html',  // URL伪静态后缀设置
		
		/* 系统变量名称设置 */
		'VAR_CONTROLLER'        =>  'c',    // 默认控制器获取变量
		'VAR_ACTION'            =>  'a',    // 默认操作获取变量
		
		
);
