<?php namespace system\model;

use hdphp\Model\Model;

class Category extends Model{

	//数据表
	protected $table = "category";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['cname','required','分类名称不能为空',3,3],
		['ctitle','required','分类标题不能为空',3,3],
		['cdes','required','分类描述不能为空',3,3],
		['ckeywords','required','分类关键字不能为空',3,3],
		['csort','num:1,99999','分类排序必须为数字',3,3],

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

	/*
	 * 这是添加顶级菜单
	 */
	public function store(){
		if(!$this->create()) return false;
		//这里返回的是当前添加之后的主键值
		return $this->add();
	}
	/*
	 * 这是添加子集菜单
	 */
	public function addSon(){
		if(!$this->create()) return false;
		//这里返回的是当前添加之后的主键值
		return $this->add();
	}
	public function edit(){
		if(!$this->create()) return false;
		return $this->save();
	}
	public function getCateData($cid){
		$cids = $this->getSons($this->get(),$cid);
		$cids[] = $cid;
		$data = $this->whereNotin('cid',$cids)->get();
		return Data::tree($data,'cname');
	}
	public function getSons($data,$cid){
		static $temp = array();
		foreach ($data as $key=>$value){
			if($value['pid'] == $cid){
				//如果是pic等于$cid的，则说明这就是他的子集
				$temp[] = $value['cid'];
				$this->getSons($data, $value['cid']);
			}
		}
		return $temp;
	}
	/*
	 *这里是显示select
	 */
	public function showCategory($cid){
		if($cid == 'all'){
			$data = $this->get();
		}else{
			$data = $this->where('pid',$cid)->get();
			$data[] = $this->where('cid',$cid)->first();
		}
		return Data::tree($data,'cname');
	}

	public function getAll()
	{
		//分页
		$page = Page::row(6)->make($this->count());
		$data = $this->limit(Page::limit())->get();
		return ['page'=>$page,'data'=>$data];
	}
}