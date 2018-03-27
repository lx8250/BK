<?php
namespace app\index\controller;
use think\Controller;
class Note extends Controller{
    public function note(){
        return $this->fetch();
    }
}