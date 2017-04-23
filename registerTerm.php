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

$team = $_POST["team"];

$name1 = $_POST["name1"];
$schoolNum1 = $_POST["schoolNum1"];
$class1 = $_POST["class1"];
$tel1 = $_POST["tel1"];
$qq1 = $_POST["qq1"];

$name2 = $_POST["name2"];
$schoolNum2 = $_POST["schoolNum2"];
$class2 = $_POST["class2"];
$tel2 = $_POST["tel2"];
$qq2 = $_POST["qq2"];

$name3 = $_POST["name3"];
$schoolNum3 = $_POST["schoolNum3"];
$class3 = $_POST["class3"];
$tel3 = $_POST["tel3"];
$qq3 = $_POST["qq3"];

try {
    // $bmobUser = new BmobUser();
    // $res = $bmobUser->register(array("username" => "$schoolNum", "password" => "p_n7!-e8", "phone" => "415-392-0202", "email" => "bmobtest111@126.com"));
    $bmobObj = new BmobObject("Term");
    $res = $bmobObj->create(array(
        "team" => "$team",
        "name1" => "$name1",
        "name2" => "$name2",
        "name3" => "$name3",
        "schoolNum1" => "$schoolNum1",
        "schoolNum2" => "$schoolNum2",
        "schoolNum2" => "$schoolNum2",
        "class1" => "$class1",
        "class2" => "$class2",
        "class3" => "$class3",
        "tel1" => "$tel1",
        "tel2" => "$tel2",
        "tel3" => "$tel3",
        "qq1" => "$qq1",
        "qq2" => "$qq2",
        "qq3" => "$qq3")); //添加对象
    echo "<script> alert(\"报名成功\"); history.go(-1); </script>";
    var_dump($res);
} catch (Exception $e) {
    echo "<script> alert(\"报名失败\"); history.go(-1); </script>";
    echo $e;
};
?>
</html>
