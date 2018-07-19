<?php
namespace app\admin\controller;
use think\Controller;
class Daily extends Controller{
    public function daily(){
        return $this->fetch();
    }
}