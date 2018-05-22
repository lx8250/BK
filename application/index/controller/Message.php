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
            $ip = '';
            $temp = Db::table('bk_message')->insert(['user_name'=>'admin','message_content'=>$content,'message_stay_time'=>date('Y-m-d H:i:s')]);
            if($temp){
                return '留言成功，等待后台审核';
            }
        }else{
            return '非本站用户不能留言';
        }
    }
}