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
	header('WWW-Authenticate:Basic realm="My website"'); //�Ի�����ʾ http://127.0.0.3 �����û��������롣��ϢΪ��My website
	echo '��Ҫ�û�����������ܼ�������'; //ȡ��ʱ��������
	exit;
}
?>