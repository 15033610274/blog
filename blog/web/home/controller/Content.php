<?php
    namespace web\home\controller;
    class Content extends Common{
        public function index(){
            $aid = q('get.aid','0','intval');

            //一打开就添加点击量
            Db::table("article")->where('aid',$aid)->increment('click',1);
            
            $arcs = Db::table('article')
                ->join('article_data','aid','=','article_aid')
                ->where('aid',$aid)
                ->first();

            $arcs['tags'] = Db::table('article_tag')
                                    ->join('tag','tag_tid','=','tid')
                                    ->where('article_aid',$arcs['aid'])
                                    ->field(['tid','tname'])
                                    ->get();
//            p($arcs);
            $aids = Db::table('category')
                        ->join('article','cid','=','category_cid')
                        ->where('cid',$arcs['category_cid'])
                        ->where('is_recycle',1)
                        ->lists('aid');//这是获取到当前分类中的所有文章的aid
//            p($categorys);
//            foreach ($categorys as $key => $value){
//                $page = Page::row(1)->url(u('content/index') . '&aid=' . $value)->make(count($categorys));
//            }
//            View::with('page',$page);
            View::with('aids',$aids);
            View::with('arcs',$arcs);
            View::make();
        }
    }