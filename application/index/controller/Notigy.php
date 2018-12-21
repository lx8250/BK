<?php
namespace app\index\controller;
use think\Controller;
//异步通知方法
class Notigy extends Controller{

    public function index(){
        //引入支付API
        require_once APP_PATH.'common/WeiXinApi/lib/WxPay.Api.php';
        $msg = '回调函数';
        \WxPayApi::notify(function ($result){
            //在notify中已经对结果进行检验过
            //对返回结果$result 进行结果处理
            //校验订单号，不存在return
            //存在订单号，查看是否被处理过，处理过return，否则处理订单
        },$msg);
    }

}