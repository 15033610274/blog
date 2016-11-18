<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 16:25
 */
    namespace web\admin\controller;
    use hdphp\route\Controller;

    class Common extends Controller{
        public function __construct(){
            if(!isset($_SESSION['username'])){
                go('admin/login/login');
            }
        }
    }