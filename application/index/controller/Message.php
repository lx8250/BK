<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use think\Request;
use think\Db;
class Message extends Controller{
    public function message(){
        return $this->fetch();
    }
    public function verify(){
        $content=$_POST['content'];
        $name = Session::get('user_name');
        $pwd = Session::get('user_pwd');
        if($name!=''&&$pwd!=''){
            if($content==''){
                return '留言内容不能为空';
            }
            //获取用户IP和地区
//            $request = Request::instance();
//            $ip = Request::instance()->ip();
//            $url='http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
//            $result = file_get_contents($url);
//            $result = json_decode($result,true);
//            dump($result);
            $ip = Request::instance()->ip();
            $temp = Db::table('bk_message')->insert(['user_name'=>'admin','message_content'=>$content,'stay_user_ip'=>$ip,'message_stay_time'=>date('Y-m-d H:m:s'),'place'=>'洛阳']);
            if($temp){
                return '留言成功，等待后台审核';
            }
        }else{
            return '非本站用户不能留言';
        }
    }
}