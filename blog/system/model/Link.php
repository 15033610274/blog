<?php namespace system\model;

use hdphp\Model\Model;

class Link extends Model{

	//数据表
	protected $table = "link";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['lname','required','网站名称为空',3,3],
		['logo','required','网站logo为空',3,3],
		['url','http','网站网址格式不正确',3,3],
		['sort','required','网站排名为空',3,3],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
		['addtime','time','function',self::MUST_AUTO,self::MODEL_INSERT],
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

	public function store(){
		if(!$this->create()) return false;
		$this->add();
		return true;
	}
	public function edit(){
		if(!$this->create()) return false;
		$this->save();
		return true;
	}
}