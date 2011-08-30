<?php
include_once 'Queue.php';

echo "<h2>基于第三方KV存储的消息队列</h2>";
echo "<font color='red'>注：传入队列存储句柄必须提供set, get ,delete方法</font>";
echo "<hr/>";
/*******Memcache*******/
echo "Memcache队列测试：<br />";
//实例化Memcache
$mc = new Memcache;
$mc->connect('127.0.0.1', 11211);
//实例化消息队列
$queue = new Queue($mc);
$name = "Memcache";
//写入消息队列
$queue->put($name, "Memcache消息队列测试－－".rand(0,100));
//出消息队列
$temp = $queue->get($name);
var_dump($temp);
$temp = $queue->status($name);
var_dump($temp);
echo "<hr/>";


/*******Tokyotrant*******/
echo "Tokyotrant队列测试：<br />";
//实例化Tokyotran
$tt = new Memcache;
$tt->connect('127.0.0.1', 1978);
//实例化消息队列
$queue = new Queue($tt);
$name = "Tokyotrant";
//写入消息队列
$queue->put($name, "Tokyotrant消息队列测试－－".rand(0,100));
//出消息队列
$temp = $queue->get($name);
var_dump($temp);
$temp = $queue->status($name);
var_dump($temp);
echo "<hr/>";

/*******Redis*******/
