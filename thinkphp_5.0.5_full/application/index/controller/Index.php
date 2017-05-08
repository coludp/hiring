<?php
namespace app\index\controller;

use \Smarty;

class Index
{
    public function indexsmarty()
    {
		// smarty 测试
		$smarty = new Smarty;
		$smarty->assign("abc","xxx333");
		$smarty->display(dirname(dirname(__FILE__)) .'\view\index.html');
	
	}
	
}
