<?php
//忽略用户的停止信号，并一直执行
ignore_user_abort(true);
set_time_limit(0);

while(1)
{
    //连接失败
    if(connection_status() != CONNECTION_NORMAL)
    {
        break;//停止守护进程
    }

    //...do something...
    
    //十秒钟执行一次
    sleep(10);
}
?>
