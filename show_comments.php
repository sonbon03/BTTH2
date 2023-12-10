<?php
$servername = "mariadb";
$username = "root";
$password = "your_password";
$dbname = "BTTH02_1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment ORDER BY id DESC";
    $stmt = $conn->query($commentQuery);

    $commentHTML = '';
//    $comment = $stmt->fetch(PDO::FETCH_ASSOC);
    while ($comment = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $commentHTML .= '
            <div class="panel panel-primary">
                <div class="panel-heading">By <b>' . $comment["sender"] . '</b> on <i>' . $comment["date"] . '</i></div>
                <div class="panel-body">' . $comment["comment"] . '</div>
                <div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="' . $comment["id"] . '">Reply</button></div>
            </div> ';

//        $commentHTML .= getCommentReply($conn, $comment["id"]);
    }
    echo $commentHTML;



} catch (PDOException $e) {
    // Xử lý lỗi kết nối hoặc thao tác cơ sở dữ liệu
    echo "Error: " . $e->getMessage();
}

// Hàm lấy các bình luận phản hồi
//function getCommentReply($conn, $parent_id)
//{
//    $replyQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = :parent_id ORDER BY id DESC";
//    $stmt = $conn->prepare($replyQuery);
//    $stmt->bindParam(':parent_id', $parent_id);
//    $stmt->execute();
//
//    $replyHTML = '';
//    while ($reply = $stmt->fetch(PDO::FETCH_ASSOC)) {
//        $replyHTML .= '
//            <div class="panel panel-info" style="margin-left: 30px;">
//                <div class="panel-heading">By <b>' . $reply["sender"] . '</b> on <i>' . $reply["date"] . '</i></div>
//                <div class="panel-body">' . $reply["comment"] . '</div>
//                <div class="panel-footer" align="right"><button type="button" class="btn btn-info reply" id="' . $reply["id"] . '">Reply</button></div>
//            </div> ';
//        $replyHTML .= getCommentReply($conn, $reply["id"]);
//    }
//
//    return $replyHTML;
//}
?>
