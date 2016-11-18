<?php
    namespace web\admin\controller;
    class Webset extends Common{
        protected $db;
        public function __construct()
        {
            parent::__construct();
            $this->db = new \system\model\Webset();
        }

        public function show(){
            if($_POST){
                if($this->db->edit()){
                    message('修改成功','','success');
                }
                message($this->db->getError(),'back','error');
            }
            $oldData = $this->db->get();
            View::with('oldData',$oldData)->make();
        }
    }