<?php
//* import de la fonction getArticle()
require('utils/functions.php');
include 'inc/header.tpl.php';

?>
<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Lasted Travel</h2>
<div class="posts">

    <?php 
              for ($index = 0; $index <= 9 ; $index ++):

                $article = getArticle($index);
                //var_dump($article);
          ?>
    <article class="post">
        <a href="" class="post__category post__category--color-<?=$article['category'] ?>">
            <?=$article['category'] ?>
        </a>
        <h3><?=$article['title'] ?></h3>
        <div class="post__meta">
            <img class="post__author-icon" src="../images/icon/<?=$article['icon'] ?>" alt="icon of the author">
            <strong class="post__author"><?=$article['author'] ?></strong>
            <time datetime="<?=$article['date-robot'] ?>"><?=$article['date-human'] ?></time>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pacers, perferendis, saepe.</p>
        <a href="article.php?index=<?=$index ?>" class="post__link">Continue reading</a>
    </article>

    <?php endfor; ?>
</div>

<?php
include 'inc/footer.tpl.php';
?>