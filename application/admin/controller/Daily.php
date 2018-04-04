<?php
namespace app\admin\controller;
use think\Controller;
class Daily extends Controller{
    public function daily(){
        $this->assign('name',$_GET['op']);
        return $this->fetch();
    }
}