
include "./vue/vueTest.php";
function editComment($id, $postId)
{
    $commentManager = new \TPBLOG\Model\CommentManager();
    $affectedComment = $commentManager->updateComment($id, $postId);
    return $affectedComment;
}
