<?php   
session_start();
require_once 'header.php';
require_once 'promos.php';
require_once 'feeds.php';
require_once 'nav.php';
require_once 'Dao.php';
$dao = new Dao();

$promotion = $dao->getPromotion($_GET['id']);
$comments = $dao->getPromoComments($_GET['id']);
$comments = array_reverse($comments);
// echo print_r($comments, 1);
?>
 
<div class="promo_feed">
    <?php new promo($promotion['nickname'], $promotion['title'], 
            $promotion['promo_description'], $promotion['promo_text'], 
            $promotion['promo_id']);
    ?>

    <form id="comment_form" name="comment_form" method="POST">
        <input type="text" name="promo_id" hidden value=<?= $_GET['id'] ?>>
        <input type="text" name="name" hidden value=<?=$_SESSION['username'] ?>>
        <textarea id="comment_area" name="comment" cols="50" rows="5" placeholder="be courteous"></textarea>
        <input id="comment_submit" type="submit" value="Add a comment!">
    </form>

    <div class="comment_feed">
        <?php foreach ($comments as $comment) {
            utils::createComment($comment['nickname'], $comment['user_comment'], $comment['id'], $promotion['promo_id']);
        } ?>
    </div>
</div>

<?php require_once 'footer.php'; ?>

