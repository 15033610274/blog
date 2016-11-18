<?php namespace system\model;

use hdphp\Model\Model;

class Article extends Model{

	//数据表
	protected $table = "article";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['title','required','请输入文章标题',self::MUST_VALIDATE,self::MODEL_BOTH],
		['author','required','请输入文章作者',self::MUST_VALIDATE,self::MODEL_BOTH],
		['category_cid','required','请选择所属分类',self::MUST_VALIDATE,self::MODEL_BOTH],
		['thumb','required','请上传缩略图',self::MUST_VALIDATE,self::MODEL_BOTH],
		['digest','required','请填写文章摘要',self::MUST_VALIDATE,self::MODEL_BOTH],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
		['sendtime','time','function',self::MUST_AUTO,self::MODEL_INSERT],
		['user_uid','userUid','method',self::MUST_AUTO,self::MODEL_INSERT],
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
	protected function userUid(){
		$username = $_SESSION['username'];
		$uid = Db::table('user')->where('username',$username)->pluck('uid');
		return $uid;
	}

	public function trashAll(){
		$page = Page::row(6)->make($this->where('is_recycle',2)->count());
		$data = $this->where('is_recycle',2)->limit(Page::limit())->get();
		return ['page'=>$page,'data'=>$data];
//		->where('is_recycle',1)
	}
	public function getAll(){
		$page = Page::row(6)->make($this->where('is_recycle',1)->count());
		$data = $this->where('is_recycle',1)->limit(Page::limit())->get();
		return ['page'=>$page,'data'=>$data];
//		->where('is_recycle',1)
	}
	public function store(){
		if(!$this->create()) return false;
		$articleDataModel = new \system\model\Article_data();
		if(!$articleDataModel->create()){//这是因为要将错误信息返回
			$this->error = $articleDataModel->getError();
			return false;
		}
		if(!isset($_POST['tag_tid'])){
			$this->error = '请选择标签';
			return false;
		}
		$aid = $this->add();//因为他会返回一个添加之后的aid
		$articleDataModel['article_aid'] = $aid;//这是将这个aid写进去
		$articleDataModel -> add();//这是添加到arcticle_data表中
		$arcticleTagModel = new \system\model\Article_tag();
		foreach ($_POST['tag_tid'] as $key => $value){
			$data = array(
				'article_aid' => $aid,
				'tag_tid' => $value
			);
			$arcticleTagModel -> add($data);
		}
		return true;
	}
	public function edit(){
		if(!$this->create()) return false;
		$articleDataModel = new \system\model\Article_data();
		if(!$articleDataModel->create()){//这是因为要将错误信息返回
			$this->error = $articleDataModel->getError();
			return false;
		}
		$this->data['updatetime'] = time();
		$this->save();//因为他会返回一个添加之后的aid
		$aid = $_POST['aid'];
		$articleDataModel -> where("article_aid",$aid)->update($_POST);//这是添加到arcticle_data表中
		$arcticleTagModel = new \system\model\Article_tag();
		//然后删除了中间表中的，再添加进去
		$arcticleTagModel->where('article_aid',$aid)->delete();
		foreach ($_POST['tag_tid'] as $key => $value){
			$data = array(
				'article_aid' => $aid,
				'tag_tid' => $value
			);
			$arcticleTagModel -> add($data);
		}
		return true;
	}
}