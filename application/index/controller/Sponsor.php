<?php
namespace app\index\controller;
use think\Controller;
class Sponsor extends Controller{
    public function sponsor(){
        return $this->fetch();
    }
}