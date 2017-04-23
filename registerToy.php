<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
include_once 'lib/BmobObject.class.php';
include_once 'lib/BmobUser.class.php';
include_once 'lib/BmobBatch.class.php';
include_once 'lib/BmobFile.class.php';
include_once 'lib/BmobImage.class.php';
include_once 'lib/BmobRole.class.php';
include_once 'lib/BmobPush.class.php';
include_once 'lib/BmobPay.class.php';
include_once 'lib/BmobSms.class.php';
include_once 'lib/BmobApp.class.php';
include_once 'lib/BmobSchemas.class.php';
include_once 'lib/BmobTimestamp.class.php';
include_once 'lib/BmobCloudCode.class.php';
include_once 'lib/BmobBql.class.php';

$name = $_POST["name"];
$schoolNum = $_POST["schoolNum"];
$class = $_POST["class"];
$tel = $_POST["tel"];
$qq = $_POST["qq"];

try {
    // $bmobUser = new BmobUser();
    // $res = $bmobUser->register(array("username" => "$schoolNum", "password" => "p_n7!-e8", "phone" => "415-392-0202", "email" => "bmobtest111@126.com"));
    $bmobObj = new BmobObject("Toy");
    $res = $bmobObj->create(array("name" => "$name", "schoolNum" => "$schoolNum", "class" => "$class", "tel" => "$tel", "qq" => "$qq")); //添加对象
    echo "<script> alert(\"报名成功\"); history.go(-1); </script>";
    var_dump($res);
} catch (Exception $e) {
    echo "<script> alert(\"报名失败\"); history.go(-1); </script>";
    echo $e;
};
?>
</html>
