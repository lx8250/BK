<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller{
    public function index(){
        $this->assign('op','index');
        return $this->fetch();
    }
}