<?php

    //管理员密码
    $Admin_Password = "123456";

    //决策者
    $adminuser = "admin";
    $adminpass = "123456";

    //状态代码
    $status[0] = "报名成功";
    $status[1] = "等待一轮面试"; $status[-1] = "一轮面试未通过";
    $status[2] = "等待二轮面试"; $status[-2] = "二轮面试未通过";
    $status[3] = "等待终轮面试"; $status[-3] = "三轮面试未通过";
    $status[4] = "面试通过";

    //当前进度
    $CurrentStatus = 2;

    //评价
    $grade[5] = "S";
    $grade[4] = "A+";
    $grade[3] = "A-";
    $grade[2] = "B";
    $grade[1] = "C";
?>
