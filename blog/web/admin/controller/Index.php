<?php   namespace web\admin\controller;
use hdphp\route\Controller;

/**
 * Created by PhpStorm.
 * User: �� ��
 * Date: 2016/9/6
 * Time: 0:41
 */
class Index extends Common
{
    private $db;
    public function __construct()
    {
    	parent::__construct();
        $this->db = new \system\model\User();
    }
    public function index()
    {
			View::make('index.html');
    }
    public function out(){
        session_unset();
        session_destroy();
        go('login/login');
    }
    public function changePwd(){
        if(IS_POST){
            if($this->db->changePwd())
            {
                //如果成功
                message('操作成功',u('login.login'),"success");
            }
            //如果失败
            //getError()获取模型的错误信息
            message($this->db->getError(),'back',"error");
        }
        View::make();
    }
    public function adminUser(){//这是个人资料
        View::make('adminUser.html');
    }
    public function adminModule(){//这是组件
        View::make('adminModule.html');
    }
    public function adminHelp(){//帮助页面
        View::make('adminHelp.html');
    }
    public function adminGallery(){//相册页面
        View::make('adminGallery.html');
    }
    public function adminLog(){//系统日志
        View::make('adminLog.html');
    }
    public function admin404(){//404
        View::make('admin404.html');
    }
    public function adminTable(){
        View::make('adminTable.html');
    }
    public function adminForm(){
        View::make('adminForm.html');
    }
}