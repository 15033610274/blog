<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/11
 * Time: 13:31
 */
    namespace web\admin\controller;

    use hdphp\page\Page;

    class Link extends Common{
        protected $db;
        public function __construct()
        {
            parent::__construct();
            $this->db = new \system\model\Link();
        }

        public function show(){
            $oldData = $this->db->get();
            foreach ($oldData as $key => $value){
                $oldData[$key]['addtime'] = date('y年m月d日h:m:s',$value['addtime']);
            }
            View::with('oldData',$oldData)->make();
        }
        public function add(){
            if(IS_POST){
                if($this->db->store()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'back','error');
            }
            View::make();
        }
        public function edit(){
            $lid = q('get.lid','0','intval');
            if(IS_POST){
                if($this->db->edit()){
                    message('添加成功','','success');
                }
                message($this->db->getError(),'back','error');
            }
            $oldData = $this->db->where('lid',$lid)->first();
            View::with('oldData',$oldData)->make();
        }
        public function del(){
            $lid = q('get.lid','0','intval');
            $this->db->where('lid',$lid)->delete();
            go(u('show'));
        }
        public function search(){
            $searchText = $_POST['searchText'];
            $data = $this->db->orwhere('lname','like','%'.$searchText.'%')->orwhere('url','like','%'.$searchText.'%')->get();
            $str = '';
            foreach ($data  as $key => $value){
                $value['addtime'] = date('y年m月d日h:m:s',$value['addtime']);
                $key = $key + 1;
                $str .= <<<str
<tr>
                    <td>
                        <input type="checkbox" name="check" value="{$value['lid']}">
                    </td>
                    <td>$key</td>
                    <td><a href="#">{$value['lname']}</a></td>
                    <td class="am-hide-sm-only">{$value['addtime']}</td>
                    <td class="am-hide-sm-only">
                        <a href="{$value['url']}" target="_blank">{$value['url']}</a>
                    </td>
                    <td>
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit({$value['lid']})"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({$value['lid']})"><span class="am-icon-trash-o"></span> 删除</button>
                            </div>
                        </div>
                    </td>
                </tr>
str;
            }
            echo $str;
        }
    }