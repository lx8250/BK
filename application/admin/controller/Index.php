<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller{
    public function index(){
        if(Session::get('admin_name')){
//            总用户
            $yonghuzongshu = Db::query("select count(*) AS num from bk_user");
            $user_time = Db::query("select date_time from bk_user");
//            今日新增用户
            $jinrixinzeng = $this->verify($user_time);
//            用户留言
            $mess_time = Db::query("select message_stay_time AS date_time from bk_message");
            $yonghuliuyan = $this->verify($mess_time);
//            访客量
            $visit = Db::query("select count(*) AS num from bk_user_visit");
//            $visit = Db::name('user_visit')->select();
//            今日访客
            $visit_time = Db::query("select visit_time as date_time from bk_user_visit");
            $visit_today = $this->verify($visit_time);
            $this->assign('yonghu',$yonghuzongshu[0]['num']);
            $this->assign('xinzeng',$jinrixinzeng);
            $this->assign('liuyan',$yonghuliuyan);
            $this->assign('visit',$visit[0]['num']);
            $this->assign('visit_today',$visit_today);
            return $this->fetch();
        }else{
            $this->error('请先登录','/admin/login/login');
        }
    }
    //验证数据库中是不是今日
    function verify($time){
        $sum=0;
        //遍历日期
        foreach ($time as $v){
            if(substr($v['date_time'],0,10)==date('Y-m-d')){
                $sum=$sum+1;
            }
        }
        return $sum;
    }
}