<?php
include "./vue/entete.html.php";
?>
<?php $title = 'Minibog - Edition commentaire'; ?>
<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<h2><?php echo 'Commentaire de ' . $comment['author'] . ', le ' . $comment['comment_date']; ?></h2>
<div>
    <label for="author">Auteur</label><br />
    <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($comment['author']); ?>" />
</div>
<div>
    <label for="comment">Commentaire</label><br />
    <textarea id="comment" name="comment">
<?php echo nl2br(htmlspecialchars($comment['comment'])); ?>
</textarea>
</div>
<div>
    <input type="submit" />
</div>
</form>
<?php $content = ob_get_clean(); ?>
<?php
include "./vue/pied.html.php";
?>