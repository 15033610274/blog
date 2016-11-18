<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/13
 * Time: 15:30
 */
    namespace web\home\controller;
    class Common{
        public function __construct()
        {
            //首先设置网站的大标题，copy
            $webSet = Db::table('webset')->lists('name,value');
            View::with('webSet',$webSet);
            //然后设置nav
            $navs = Db::table('category')->where('pid',0)->get(['cid','cname']);
//            $two = Data::channelLevel(Db::table('category')->get());
//            View::with('two',$two);
//            p($two);//这是二级分类
            View::with('navs',$navs);
            //然后输出分类
            $categorys = Db::table('category')->get();
            //然后获取分类所对应文章的数量,并且写入到数组中
            foreach ($categorys as $key => $value){
                $categorys[$key]['total'] = Db::table('article')
                                            ->where('category_cid',$value['cid'])
                                            ->where('is_recycle',1)
                                            ->count();
            }
            View::with('categorys',$categorys);
            //然后获取标签
            $tags = Db::table('tag')->get();
            View::with('tags',$tags);
            //然后是底部的最新文章
            $newArc = Db::table('article')
                    ->orderBy('sendtime','desc')
                    ->limit(3)
                    ->get();
            View::with('newArc',$newArc);
            //然后就是友情链接
            $links = Db::table('link')->get();
            View::with('links',$links);
        }
    }