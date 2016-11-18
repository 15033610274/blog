<?php   
	namespace web\admin\controller;
	use hdphp\route\Controller;

/**
 * Created by PhpStorm.
 * User: 杨宇辉
 * Date: 2016/9/6
 * Time: 0:41
 */
class Login extends Controller{
	private $db;
	public function __construct(){
//		session_start();
		$this -> db = new \system\model\User();
	}
    public function login()
    {
    	View::with("root",__ROOT__);
        View::make();
    }
	public function denglu(){
		go('index/index');
	}
	public function codeImg(){
		Code::width(115)->height(42)->num(1)->make();
		Code::make();
	}
	public function username(){
		if(IS_POST){
			if($this->db->username())
			{
				//这里则说明用户名存在
				echo '1';
			}
			//这里证明用户名不存在
			echo 0;
		}
	}
	public function password(){
		if(IS_POST){
			if($this->db->password())
			{
				//这里则说明用户名存在
				echo '1';
			}
			//这里证明用户名不存在
			echo 0;
		}
	}

	public function code(){
		if(IS_POST){
			if($this->db->code())
			{
				//这里则说明验证码正确存在
				echo '1';
			}
			//这里证明验证码不正确
			echo 0;
		}
	}
}
//json_encode