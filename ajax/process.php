<?php
require_once("../libs/db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $db = new DB();
    switch ($action) {
        case 'onPinned':
            $idPost = $_POST['idPost'];
            $checked = $_POST['checked'];
            // $sql = "UPDATE b_post VALUES (title,content,tags,status,created_time,updated_time,author_id) VALUES('$title','$content','$tags',$status,'$created','$updated',1)";

            $sql = "UPDATE b_post SET `hot` = $checked WHERE id = $idPost";
            $db->handleSQL($sql);
            die(json_encode([
                'status' => 'success',
                'msg' => 'Cập nhật thành công !'
            ]));

            break;
        case 'createPost':
            $data = json_decode($_POST['data'],1);
            $title = trim($data['title']);
            $tags = trim($data['tags']);
            $status = trim($data['status']);
            $content = trim($data['content']);
            $created = $updated = date("Y-m-d H:i:s");

            $sql = "INSERT INTO b_post (title,content,tags,status,created_time,updated_time,author_id) VALUES('$title','$content','$tags',$status,'$created','$updated',1)";

            // echo $sql;
            $db->handleSQL($sql);
            die(json_encode([
                'status' => 'success',
                'msg' => 'Tạo bài viết thành công !'
            ]));
        case 'deletePost':
            $idpost = $_POST['idPost'];
            $sql = "DELETE FROM b_post WHERE id=$idpost";
            $db->handleSQL($sql);
            die(json_encode([
                'status' => 'success',
                'msg' => 'Xóa thành công !'
            ]));
        case 'postComment':
            $user_id = $_POST['account']['id'] ?? 2;
            $post_id = $_POST['post_id'];
            $message = $_POST['message'];
            $created_time = date("Y-m-d H:i:s");
            $sql = "INSERT INTO b_comment VALUES(null,'$message',1,null,$user_id,$post_id,'$created_time')";
            $db->handleSQL($sql);
            die(json_encode([
                'status' => 'success',
                'msg' => 'Bình luận thành công !',
                'sql' => $sql
            ]));
        default:
            # code...
            break;
    }
}
