<?php namespace system\model;

use hdphp\Model\Model;

class User extends Model{

	//数据表
	protected $table = "user";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['username','required','用户名为空',3,3],
		['password','required','用户名为空',3,3],

	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;


	//禁止插入的字段
	protected $denyInsertFields = [];

	//禁止更新的字段
	protected $denyUpdateFields = [];

	//前置方法 比如: _before_add 为添加前执行的方法
	protected function _before_add(){}
	protected function _before_delete(){}
	protected function _before_save(&$data){}

	protected function _after_add(){}
	protected function _after_delete(){}
	protected function _after_save(){}

	public function username(){
		$username = $_POST['info'];
		$mysql_username = Db::table('user')->where('username',$username)->first();
		if($username == ''){
			$this->error = '用户名为空';
			$_SESSION['username'] = '';
			return false;

		}
		if(!in_array($username,$mysql_username)){
			$this->error = '用户名不存在';
			$_SESSION['username'] = '';
			return false;
		}
		$_SESSION['username'] = $username;
		return true;
	}

	public function password(){
		$username = $_SESSION['username'];
		$password = Crypt::encrypt($_POST['info']);
		$mysql_password = Db::table('user')->where('username',$username)->first();
		if($password == ''){
			$this->error = '密码为空';
			return false;
		}
		if($password != $mysql_password['password']){
			$this->error = '密码不正确';
			return false;
		}
		return true;
	}

	public function code(){
		$code = strtoupper($_POST['info']);
		if($code == ''){
			$this->error = '验证码为空';
			return false;
		}
		if($code != strtoupper($_SESSION['code'])){
			$this -> error = '验证码输入不正确';
			return false;
		}
		return true;
	}
	public function changePwd(){
		$this->validate=[
			//['字段名','验证方法','提示信息',验证条件,验证时间]
			['password','required','请输入原始密码',self::MUST_VALIDATE,self::MODEL_BOTH],
			['new_password','required','请输入新密码',self::MUST_VALIDATE,self::MODEL_BOTH],
			['twice_password','confirm:new_password','两次输入的密码不一致',self::MUST_VALIDATE,self::MODEL_BOTH],
		];
		if(!$this->create()) return false;
		//判断原始密码是否正确
//		$this->where('uid',$_SESSION['admin']['uid'])->first();
		$mysql_password = $this->where('username',$_SESSION['username'])->first();
		if(!in_array($_POST['password'], $mysql_password)){
			$this->error = '密码输入不正确';
			return false;
		}
		if($_POST['password'] == $_POST['new_password']){
			$this->error = '新密码不可以和旧密码一致';
			return false;
		}
		$data = $this->where('username',$_SESSION['username'])->update(['password'=>$_POST['new_password']]);
		if(!$data){
			$this->error = '密码修改失败';
			return false;
		}
		return true;
	}
}