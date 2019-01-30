//获取选择年月的范围
    function getTime($nian = 0, $yue = 0)
    {
        if (!empty($nian) && !empty($yue)) {
            $time['begin'] = mktime(0, 0, 0, $yue, 1, $nian);
            $time['end'] = mktime(23, 59, 59, ($yue + 1), 0, $nian);
            return $time;
        }
        if (empty($nian) && empty($yue)) {
            $now = time();
            $nian = date("Y", $now);
            $yue = date("m", $now);
            $time['begin'] = mktime(0, 0, 0, $yue, 1, $nian);
            $time['end'] = mktime(23, 59, 59, ($yue + 1), 0, $nian);
            return $time;
        }
        if (!empty($nian) && empty($yue)) {
            $time['begin'] = mktime(0, 0, 0, 1, 1, $nian);
            $time['end'] = mktime(23, 59, 59, 12, 31, $nian);
            return $time;
        }
    }

    //获取周的范围
    function getWeek($year, $mon, $week)
    {
        //获取一月有几天
        $days = date('d', mktime(0, 0, 0, ($mon + 1), 0, $year));
        for ($i = 1; $i < $days; $i = $i + 7) {   //循环本月有多少周
            $w = date('N', strtotime($year . '-' . $mon . '-' . $i));  //计算第一天是周几
//            $weekinfo[] =array(
//                'begin' => strtotime($year.'-'.$mon.'-'.$i.' -'.($w-1).' days'),
//                'end' => strtotime($year.'-'.$mon.'-'.($i+1).' +'.(7-$w).' days'),
//            );
            $begin_Y = date('Y', strtotime($year . '-' . $mon . '-' . $i . ' -' . ($w - 1) . ' days'));
            $begin_M = date('m', strtotime($year . '-' . $mon . '-' . $i . ' -' . ($w - 1) . ' days'));
            $begin_D = date('d', strtotime($year . '-' . $mon . '-' . $i . ' -' . ($w - 1) . ' days'));
            $end_Y = date('Y', strtotime($year . '-' . $mon . '-' . $i . ' +' . (7 - $w) . ' days'));
            $end_M = date('m', strtotime($year . '-' . $mon . '-' . $i . ' +' . (7 - $w) . ' days'));
            $end_D = date('d', strtotime($year . '-' . $mon . '-' . $i . ' +' . (7 - $w) . ' days'));

            $weekinfo[] = array(
                'begin' => mktime(0, 0, 0, $begin_M, $begin_D, $begin_Y),
                'end' => mktime(23, 59, 59, $end_M, $end_D, $end_Y),
            );
        }
        //当月不足一周的天数为下月第一周的数据
        if (empty($weekinfo[$week - 1])) {
            return '当前月份不存在此周';
        }
        return $weekinfo[$week - 1];
    }