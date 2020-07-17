<?php
/*
 * @Author: your name
 * @Date: 2019-08-23 12:54:26
 * @LastEditTime: 2020-07-13 22:38:27
 * @LastEditors: Please set LastEditors
 * @Description: ailvxing login
 * @FilePath: \undefinedd:\workwold\exercise\www\10-1php_Ajax\php\ailvxing\login.php
 */ 

	header('Content-Type:text/html; charset=utf-8');

	// 自定义的用户信息，实际上应该从数据库中取出
	$users = array(
		'admin' => 123456,
		'test' => 654321
	);

	// 接收登录信息
	$name = $_POST['name'];
	$pass = $_POST['password'];

	检测用户是否存在
	if(array_key_exists($name, $users) && $users[$name] == $pass) {
		echo '登录成功!';
		header('refresh:2; url=index.php');
	} else {
		echo '用户或密码错误!';
		header('refresh:2; url=login.html');
	}

	if(array_values($name)==$users['admin'] && $users['test'] == array_values($pass) {
		// echo '登录成功!';
		header('refresh:2; url=index.php')
	} else {
		echo '用户或密码错误!';
		header('refresh:2; url=login.html');
	}
?>