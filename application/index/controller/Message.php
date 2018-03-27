<?php
namespace app\index\controller;
use think\Controller;
class Message extends Controller{
    public function message(){
        return $this->fetch();
    }
}