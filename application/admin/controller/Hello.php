<?php
/**
 * Created by PhpStorm.
 * User: lixin
 * Date: 2018/3/20 0020
 * Time: 下午 5:03
 */
namespace app\admin\controller;
use think\Controller;
class Hello extends Controller{
    public function hello(){
        return $this->fetch();
    }
}