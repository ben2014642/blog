<?php
require_once("../libs/db.php");
$db = new DB();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idPost = $_POST['idPost'];
    $title = trim($_POST['title']);
    $tags = trim($_POST['tags']);
    $status = trim($_POST['status']);
    $content = trim($_POST['content']);
    $updated = date("Y-m-d H:i:s");

    $sql = "UPDATE b_post SET `title` = '$title', `content` = '$content', `tags` = '$tags', `status` = $status, `updated_time` = '$updated' WHERE id = $idPost";
    $db->handleSQL($sql);
    // echo $sql;
    die(json_encode([
        'status' => 'success',
        'msg' => 'Cập nhật thành công !'
    ]));
}