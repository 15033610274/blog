<?php namespace web\home\controller;
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

class Entry extends Common{
	//首页
	public function index() {
		//首先我把当前页面的title改了
		$title = '如影随形';
		View::with('title',$title);
		$page = Page::row(2)->make(Db::table('article')
				->where('is_recycle',1)
				->count()
			);
		//然后就是显示文章
		$arcs = Db::table('article')
			->join('category','category_cid','=','cid')
			->where('is_recycle',1)//首先不能让回收站的显示出来
			->limit(Page::limit())
			->get();
		foreach($arcs as $key => $value){
			$arcs[$key]['tags'] = Db::table('article_tag')
							->join('tag','tag_tid','=','tid')
							->where('article_aid',$value['aid'])
							->field(['tid','tname'])
							->get();
		}
		View::with('arcs',$arcs);
		View::with('page',$page);
		View::make();
	}
}