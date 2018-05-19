<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;

class Index extends Controller{
    public function index(){
        if(Session::get('admin_name')){
            return $this->fetch();
        }else{
            $this->error('请先登录','/admin/login/login');
        }
    }
}