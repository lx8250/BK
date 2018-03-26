<?php
namespace app\index\controller;
use think\Controller;
class Fresh extends Controller{

    public function fresh()
    {
       return $this->fetch();
    }
}