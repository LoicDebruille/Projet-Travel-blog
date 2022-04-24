        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title"><?= $article['title'] ?></h2>
        <div class="posts">
            <article class="post post--solo">
                <a href="" class="post__category post__category--color-<?= $article['category'] ?>">
                    <?= $article['category'] ?>
                </a>
                <div class="post__meta">
                    <img class="post__author-icon" src="../images/icon-<?= $article['icon'] ?>.png" alt="">
                    <strong class="post__author"><?= $article['author'] ?></strong>
                    <time datetime="<?= $article['date-robot'] ?>">
                        <?= $article['date-human'] ?>
                    </time>
                </div>
                <div class="post__img">
                    <img src=" ../images/<?= $article['picture'] ?>" alt="picture of the article">
                </div>
                <p class="single">
                    <?= $article['text'] ?>
                </p>
                <a href=" ./index.php" class="post__link">back to home</a>
            </article>
        </div>