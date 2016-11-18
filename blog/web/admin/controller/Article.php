<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/9
 * Time: 18:47
 */
    namespace web\admin\controller;
    use hdphp\page\Page;

    class Article extends Common{
        protected $db;
        public function __construct()
        {
            parent::__construct();
            $this->db = new \system\model\Article();
        }

        public function show(){
            //首先先将旧数据发送到页面当中去
            $data = $this->db->getAll();
            $oldData = $data['data'];
            $page = $data['page'];
            View::with('oldData',$oldData)->with('page',$page)->make();
        }
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'back','error');
            }
            //我先需要把所属分类中所有的分类列出来
            $cateData = Data::tree(Db::table("category")->get(),'cname');
            $tagData = Db::table("tag")->get();
            View::with('cateData',$cateData)->with('tagData',$tagData)->make();
        }
        public function edit(){
            $aid = q('get.aid','0','intval');

            if(IS_POST){
                if($this->db->edit()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'back','error');
            }
            $oldData = $this->db->where('aid',$aid)->first();
            $oldData['sendtime'] = date('y-m-d d:m:s',$oldData['sendtime']);
            //然后将data中的数据添加进来
            $data = Db::table('article_data')->where('article_aid',$aid)->first();
            foreach ($data as $key => $value){
                $oldData[$key] = $value;
            }
            $tids = Db::table('article_tag')->where('article_aid',$aid)->lists('tag_tid');
            $oldData['tid'] = $tids;
            $cateData = Data::tree(Db::table("category")->get(),'cname');
            $tagData = Db::table("tag")->get();
            View::with('cateData',$cateData)->with('tagData',$tagData)->with('oldData',$oldData)->make();
        }
        public function del(){
            $aid = q('get.aid','0','intval');
            //直接将这个字段修改成2
            $this->db->where('aid',$aid)->update(['is_recycle'=>'2']);
            go(u('show'));
        }
        public function trash(){
            $data = $this->db->trashAll();
            $oldData = $data['data'];
            $page = $data['page'];
            View::with('oldData',$oldData)->with('page',$page)->make();
        }
        public function revocation(){
            $aid = q('get.aid','0','intval');
            //直接将这个字段修改成1
            $this->db->where('aid',$aid)->update(['is_recycle'=>'1']);
            go(u('show'));
        }
        public function removeDel(){//这是彻底删除
            $aid = q('get.aid','0','intval');
            //首先先将article中的删除了
            $this->db->where('aid',$aid)->delete();
            //然后再将article_data中的删除了
            Db::table('article_data')->where('article_aid',$aid)->delete();
            //然后再将article_tag中的删除了
            Db::table('article_tag')->where('article_aid',$aid)->delete();
            go(u('show'));
        }
        /*
         * 这是搜索
         */
        public function search(){//这是在显示页面搜索
            $searchText = '%' . $_POST['searchText'] .'%';
//            where('is_recycle,1')
            $data = $this->db->where('is_recycle',1)
                ->where('title','like',$searchText)->orwhere('sendtime','like',$searchText)
                ->orwhere('author','like',$searchText)
                ->get();
            $str = '';
            foreach ($data as $key => $value){
                $key = $key + 1;
                $username = Db::table('user')->where('uid',$value['user_uid'])->pluck('username');
                $cname = Db::table('category')->where('cid',$value['category_cid'])->pluck('cname');
                $str .= <<<eof
<tr>
            <td>
                <input type="checkbox" name="check" value="{$value['cid']}">
            </td>
            <td>$key</td>
            <td><a href="#">{$value['title']}</a></td>
            <td class="am-hide-sm-only">{$value['sendtime']}</td>
            <td class="am-hide-sm-only">{$value['author']}</td>
            <td class="am-hide-sm-only">{$username}</td>
            <td class="am-hide-sm-only">{$cname}</td>
            <td>
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit({$value['aid']})"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({$value['aid']})"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </td>
        </tr>
eof;
        echo $str;
            }
        }


        public function searchDel(){//这是在回收站搜索
            $searchText = '%' . $_POST['searchText'] .'%';
//            where('is_recycle,1')
            $data = $this->db->where('is_recycle',2)
                ->where('title','like',$searchText)->orwhere('sendtime','like',$searchText)
                ->orwhere('author','like',$searchText)
                ->get();
            $str = '';
            foreach ($data as $key => $value){
                $key = $key + 1;
                $username = Db::table('user')->where('uid',$value['user_uid'])->pluck('username');
                $cname = Db::table('category')->where('cid',$value['category_cid'])->pluck('cname');
                $str .= <<<eof
<tr>
            <td>
                <input type="checkbox" name="check" value="{$value['cid']}">
            </td>
            <td>$key</td>
            <td><a href="#">{$value['title']}</a></td>
            <td class="am-hide-sm-only">{$value['sendtime']}</td>
            <td class="am-hide-sm-only">{$value['author']}</td>
            <td class="am-hide-sm-only">{$username}</td>
            <td class="am-hide-sm-only">{$cname}</td>
            <td>
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit({$value['aid']})"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({$value['aid']})"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </td>
        </tr>
eof;
                echo $str;
            }
        }

        public function delImg()
        {
            $path = $_POST['path'];
            if ($path == 'resource/images/nopic.jpg'){
                return true;
            }else{
                unlink($path);
                return true;
            }
        }
    }