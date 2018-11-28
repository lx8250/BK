<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index(){
        //访客记录
//        visit_ip();
        return $this->fetch();
    }
}
