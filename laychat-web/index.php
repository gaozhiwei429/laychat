<?php
/**
 * 测试页面。
 */
require_once __DIR__ . '/__init.php';
use Lib\Db;
_session_start();
$uid = $_GET['uid'];
$db = Db::instance('laychat');
$res = $db->query("select * from `user` where uid ='$uid'");
$_SESSION['laychat'] = array(
    'id'       => $res[0]['uid'],
    'username' => $res[0]['username'],
    'sign'     => $res[0]['sign'],
    'avatar'   => $res[0]['avatar'],
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>pangu客服系统</title>
    <link rel="stylesheet" href="http://43.251.231.178:8086/static/layui/css/layui.css">
    <link rel="stylesheet" href="http://43.251.231.178:8086/static/css/base.css?v1">
    <script src="http://43.251.231.178:8086/static/layui/layui.js?v2"></script>
    <script src="http://43.251.231.178:8086/static/js/json2.js"></script>
    <script src="http://43.251.231.178:8086/static/js/swfobject.js"></script>
    <script src="http://43.251.231.178:8086/static/js/web_socket.js"></script>
    <script src="http://43.251.231.178:8086/static/js/jquery.min.js"></script>
    <script src="http://43.251.231.178:8086/static/js/laychat.js"></script>
</head>
<body>

<div class="main-box">
    <div class="desc">
        <script type="text/javascript">
                laychat.open();
        </script>

        <img src="<?php echo $_SESSION['laychat']['avatar'];?>" style="width:40px">
        <?php echo $_SESSION['laychat']['username'];?>
</body>
</html>
