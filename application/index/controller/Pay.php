<?php
namespace app\index\controller;

use think\Controller;

class Pay extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

    public function pay()
    {
        //获取支付方式
        if (input('pay') == 1) {
            require_once './Apliay/pagepay/pagepay.php';
        } else {
            //引入支付API
            require_once APP_PATH . 'common/WeiXinApi/lib/WxPay.Api.php';
            //new 统一下单输入对象
            $input = new \WxPayUnifiedOrder();
            //获取商品描述
            $body = input('wuyuan');
            //设置商品描述
            $input->SetBody($body . '元商品');
            //设置商品订单号
            $trade_no = date('Ymdhis' . $body);
            $input->SetOut_trade_no($trade_no);
            //设置订单金额(分)
            $input->SetTotal_fee($body * 100);
            //设置异步通知地址
            $input->SetNotify_url('/Notify/index');
            //设置交易类型(扫码支付)
            $input->SetTrade_type('NATIVE');
            //设置商品ID(类型为NATIVE必须商品ID)
            $input->SetProduct_id($body . '元商品');
            //设置同意调用商品的API
            $result = \WxPayApi::unifiedOrder($input);//成功时返回

            var_dump($result);
            $code_url = $result['code_url'];
            $img = '<img src=http://paysdk.weixin.qq.com/example/qrcode.php?data=' . urldecode($code_url) . ' />';
            echo $img;

        }
    }
}


?>