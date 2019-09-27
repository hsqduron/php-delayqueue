<?
function validate($user, $pass) {
	$users = DqConf::$http_users;
	if(isset($users[$user]) && $users[$user] === $pass) {
		return true;
	} else {
		return false;
	}
}

if(!validate(@$_SERVER['PHP_AUTH_USER'], @$_SERVER['PHP_AUTH_PW'])) {
	http_response_code(401);
	header('WWW-Authenticate:Basic realm="My website"'); //对话框显示 http://127.0.0.3 请求用户名和密码。信息为：My website
	echo '需要用户名和密码才能继续访问'; //取消时浏览器输出
	exit;
}
?>