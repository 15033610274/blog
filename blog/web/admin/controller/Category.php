<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 16:24
 */
    namespace web\admin\controller;
    class Category extends Common{
        protected $db;
        public function __construct(){
            parent::__construct();
            $this->db = new \system\model\Category();
        }
        /*
         * 这是添加
         */
        public function show(){
            $data = Data::tree($this->db->getAll()['data'],'cname');
            $page = $this->db->getAll()['page'];
            $bigCname = $this->db->where('pid',0)->get();
            View::with('page',$page)->with('data',$data)->with('bigCname',$bigCname)->make();
        }
        /*
         * 这是添加顶级分类
         */
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                  die();
                }
                message($this->db->getError(),'','error');
            }
            View::make();
        }
        /*
         * 这是添加子集
         */
        public function addSon(){
            $cid = q('get.cid',0,'intval');
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                    die();
                }
                message($this->db->getError(),'','error');
            }
            $cateData = $this->db->where('cid',$cid)->field(['cid','cname'])->first();
            View::with("cateData",$cateData)->make();
        }
        public function del(){
            $cid = q("get.cid",'0','intval');
            $pid = $this->db->where('cid',$cid)->pluck('pid');
            $this->db->where('pid',$cid)->update(['pid'=>$pid]);
            $this->db->where('cid',$cid)->delete();
            message('删除成功',u('show'),'success');
        }
        public function edit(){
            if(IS_POST)
            {
                if($this->db->edit())
                {
                    message('操作成功','','success');
                }
                message($this->db->getError(),'','error');
            }
            $cid = q('get.cid',0,'intval');
            $oldData = $this->db->where('cid',$cid)->first();
            $cateData = $this->db->getCateData($cid);
            View::with('oldData',$oldData)->with('cateData',$cateData)->make();
        }
        public function showCategory(){
            if(IS_POST){
                $cid = q('post.cid','all','intval');
                $data = $this->db->showCategory($cid);
                $str = '';
                foreach ($data as $key => $value){
                    $key = $key+1;
                    $str .= <<<str
                    <tr>
                        <td>
                            <input type="checkbox" name="check">
                        </td>
                        <td>{$key}</td>
                        <td><a href="#">{$value['_cname']}</a></td>
                        <td class="am-hide-sm-only">{$value['ctitle']}</td>
                        <td class="am-hide-sm-only">{$value['cdes']}</td>
                        <td class="am-hide-sm-only">{$value['ckeywords']}</td>
                        <td class="am-hide-sm-only">{$value['csort']}</td>
                        <td>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="addSon({$value['cid']})"><span class="am-icon-plus"></span> 添加分类</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit({$value['cid']})"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({$value['cid']})"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </td>
                    </tr>
str;
                }
                echo ($str);

            }
        }
        public function search(){
            if(IS_POST) {
                $searchText = $_POST['searchText'];
                $data = $this->db->where('cname', 'like', '%'.$searchText.'%')->orwhere('ctitle', 'like', '%'.$searchText.'%')->orwhere('cdes', 'like', '%'.$searchText.'%')->orwhere('ckeywords', 'like', '%'.$searchText.'%')->orwhere('ckeywords', 'like', '%'.$searchText.'%')->get();
                $str = '';
                foreach ($data as $key => $value){
                    $key = $key+1;
                    $str .= <<<str
                    <tr>
                        <td>
                            <input type="checkbox" name="check">
                        </td>
                        <td>{$key}</td>
                        <td><a href="#">{$value['cname']}</a></td>
                        <td class="am-hide-sm-only">{$value['ctitle']}</td>
                        <td class="am-hide-sm-only">{$value['cdes']}</td>
                        <td class="am-hide-sm-only">{$value['ckeywords']}</td>
                        <td class="am-hide-sm-only">{$value['csort']}</td>
                        <td>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="addSon({$value['cid']})"><span class="am-icon-plus"></span> 添加分类</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit({$value['cid']})"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({$value['cid']})"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </td>
                    </tr>
str;
                }
                echo ($str);
            }
        }
        public function delAll(){
            $array=explode('.',$_GET['cidAll']);
            foreach ($array as $key => $cid){
                $pid = $this->db->where('cid',$cid)->pluck('pid');
                $this->db->where('pid',$cid)->update(['pid'=>$pid]);
                $this->db->where('cid',$cid)->delete();
            }
            message('删除成功',u('show'),'success');
        }





    }
