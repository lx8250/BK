<?php
use think\Db;

/**
 * Created by PhpStorm.
 * User: lixin
 * Date: 2018/5/22 0022
 * Time: 上午 9:07
 */
    //获取ip地址
    function insert_ip($id)
    {
        $ip = getIP();
        $str = file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip='.$ip);
        $str = (object)json_decode($str);
        if(strlen(json_encode($str))>15){
            $ds = array(
                'user_id' => $id,
                'user_ip' => $ip,
                'address' => $str->country . $str->province . $str->city . $str->district,
                'addtime' => date('Y-m-d H:I:s')
            );
            Db::table('bk_user_loginip')->insert($ds);
        }else{
            $ds = array(
                'user_id' => $id,
                'user_ip' => $ip,
                'address' => '',
                'addtime' => date('Y-m-d H:i:s')
            );
            Db::table('bk_user_loginip')->insert($ds);
        }

    }

//访客记录
function visit_ip()
{
    $ip = getIP();
    if(strlen(\think\Session::get('ip'))==0) {
        $str = file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=' . $ip);
        $str = (object)json_decode($str);
        if (strlen(json_encode($str)) > 15) {
            $ds = array(
                'visit_ip' => $ip,
                'visit_address' => $str->country . $str->province . $str->city . $str->district,
                'visit_time' => date('Y-m-d H:I:s')
            );
            Db::table('bk_user_visit')->insert($ds);
        } else {
            $ds = array(
                'visit_ip' => $ip,
                'visit_address' => '',
                'visit_time' => date('Y-m-d H:i:s')
            );
            Db::table('bk_user_visit')->insert($ds);
        }
        \think\Session::set('ip', $ip);
    }
}
    function getIP()
    {
        if (getenv("HTTP_CLIENT_IP"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR"))
            $ip = getenv("REMOTE_ADDR");
        else $ip = "Unknow";
        return $ip;
}