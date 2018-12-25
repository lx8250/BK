<?php
namespace app\index\controller;

use think\Controller;

class Pay extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

    //同步提交地址
    public function returnurl(){
        require_once("application/common/Alipay/config.php");
        require_once 'application/common/Alipay/pagepay/service/AlipayTradeService.php';
        $arr=$_GET;
        $alipaySevice = new \AlipayTradeService($config);
        $result = $alipaySevice->check($arr);
        if($result) {
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代码

            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

            //商户订单号
            $out_trade_no = htmlspecialchars($_GET['out_trade_no']);

            //支付宝交易号
            $trade_no = htmlspecialchars($_GET['trade_no']);

//            echo "验证成功<br />支付宝交易号：".$trade_no;
            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
            return $this->success('验证成功，支付宝交易号：'.$trade_no,'/Index/index');
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }else{
            var_dump('charset'.$_GET['charset']);
            var_dump('out_trade_no'.$_GET['out_trade_no']);
            var_dump('method'.$_GET['method']);
            var_dump('total_amount'.$_GET['total_amount']);
            var_dump('sign'.$_GET['sign']);
            var_dump('trade_no'.$_GET['trade_no']);
            var_dump('auth_app_id'.$_GET['auth_app_id']);
            var_dump('app_id'.$_GET['app_id']);
            var_dump('charset'.$_GET['charset']);
            exit('同步验签失败');
        }
    }

    //异步提交地址
    public function notifyurl(){
        // 参考文档 https://docs.open.alipay.com/270/105902/
        //对于PC网站支付的交易，在用户支付完成之后，支付宝会根据API中商户传入的notify_url，通过POST请求的形式将支付结果作为参数通知到商户系统。

        require_once APP_PATH.'common/Aplipay/config.php';
        require_once APP_PATH.'common/Aplipay/pagepay/service/AlipayTradeService.php';

        $arr=$_POST;
        $alipaySevice = new \AlipayTradeService($config);
        $alipaySevice->writeLog(var_export($_POST,true));
        $result = $alipaySevice->check($arr);
        if($result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代


            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——

            //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表

            //商户订单号

            $out_trade_no = $_POST['out_trade_no'];

            //支付宝交易号

            $trade_no = $_POST['trade_no'];

            //交易状态
            $trade_status = $_POST['trade_status'];


            if($_POST['trade_status'] == 'TRADE_FINISHED') {

                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序

                //注意：
                //退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
            }
            else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序
                //注意：
                //付款完成后，支付宝系统发送该交易状态通知
            }
            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
            echo "success";	//请不要修改或删除
        }else {
            //验证失败
            echo "fail";
        }

    }

    public function pay()
    {
        //获取商品描述
        $body = input('wuyuan');
        //获取支付方式
        if (input('pay') == 1) {

            require_once APP_PATH . 'common/Alipay/config.php';
            require_once APP_PATH . 'common/Alipay/pagepay/service/AlipayTradeService.php';
            require_once APP_PATH . 'common/Alipay/pagepay/buildermodel/AlipayTradePagePayContentBuilder.php';

            //商品信息
            $out_trade_no = date('Ymdhis' . $body);
            $name = $body.'元商品';
            $money = $body;
            $body = '此商品您买不了吃亏买不了上当';

            //构造参数
            $pay = new \AlipayTradePagePayContentBuilder();
            $pay->setBody($body);
            $pay->setSubject($name);
            $pay->setOutTradeNo($out_trade_no);
            $pay->setTotalAmount($money);

            //传递参数
            $aop = new \AlipayTradeService($config);
            $reponse = $aop->pagePay($pay,$config['return_url'],$config['notify_url']);

            var_dump($reponse);exit();

        } else {
            //引入支付API
            require_once APP_PATH . 'common/WeiXinApi/lib/WxPay.Api.php';
            //new 统一下单输入对象
            $input = new \WxPayUnifiedOrder();

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