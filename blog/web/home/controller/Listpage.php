<?php namespace web\home\controller;
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

class Listpage extends Common{
    public function index() {
        $cid = q('get.cid','0','intval');
        $tid = q('get.tid','0','intval');
        //这里是如果传递过来的是tid，就显示分类的文章
        if($tid){
            //先将文章弄出来
            $arcs = Db::table('article')
                ->join('article_tag','aid','=','article_aid')
                ->join('category','category_cid','=','cid')
                ->where('is_recycle',1)//这是不让回收站的显示出来
                ->where('tag_tid',$tid)
                ->limit(Page::limit())
                ->get();
            $headData = array(
                'type' => '标签',
                'name' => Db::table('tag')
                    ->where('tid',$tid)
                    ->pluck('tname'),
                'totle' => count($arcs)
            );
        }
//      这里是如果传递过来的是cid，就显示分类的文章
        if($cid){
            $categoryModel = new \system\model\Category();
            //getSon是分类模型中的递归找子集方法
            //$categoryModel->get()，获取分类所有数据
            $cids = $categoryModel->getSons($categoryModel->get(),$cid);
            //把自己追加进去
            $cids[] = $cid;
            //然后将文章弄出来
            $arcs = Db::table('article')
                ->join('category','category_cid','=','cid')
                ->where('is_recycle',1)
                ->wherein('category_cid',$cids)
                ->limit(Page::limit())
                ->get();
            $headData = array(
                'type' => '标签',
                'name' => Db::table('category')
                    ->where('cid',$cid)
                    ->pluck('cname'),
                'totle' => count($arcs)
            );
        }
        foreach ($arcs as $key => $value){//这是添加tag
            $arcs[$key]['tags'] = Db::table('article_tag')
                ->join('tag','tag_tid','=','tid')
                ->where('article_aid',$value['aid'])
                ->field(['tid','tname'])
                ->get();
        }
        View::with('headData',$headData);
        $page = Page::row(2)->make(count($arcs));
        View::with('page',$page);
        View::with('arcs',$arcs);
        View::make();
    }
}