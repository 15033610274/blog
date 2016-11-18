<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/9
 * Time: 16:37
 */
    namespace web\admin\controller;
    class Tag extends Common{
        protected $db;
        public function __construct()
        {
            parent::__construct();
            $this->db = new \system\model\Tag();
        }

        public function show(){
            $data = $this->db->show();
            View::with($data)->make();
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
            $tid = q('get.tid','','intval');
            if(IS_POST){
                if($this->db->edit()){
                    message('修改成功','','success');
                }
                message($this->db->getError(),'back','error');
            }
            $oldData = $this->db->where('tid',$tid)->first();
            View::with('oldData',$oldData)->make();
        }
        public function del(){
            $tid = q('get.tid','','intval');
            $this->db->where('tid',$tid)->delete();
            message('操作成功',u('show'),'success');
        }
        public function search(){
            $searchText = $_POST['searchText'];
            $data = $this->db->orwhere('tname','like','%'.$searchText.'%')->get();
            $str = '';
            foreach ($data  as $key => $value){
                $key = $key + 1;
                $str .= <<<str
<tr>
                    <td>
                        <input type="checkbox" name="check" value="{$value['tid']}">
                    </td>
                    <td>$key</td>
                    <td><a href="#">{$value['tname']}</a></td>
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
    