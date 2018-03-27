<?php
namespace app\index\controller;
use think\Controller;
class Personal extends Controller{
    public function personal(){
        return $this->fetch();
    }
}