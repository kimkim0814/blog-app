<!DOCTYPE html>
<html lang="ja">

    <?= $header ?>

    <body>

        <?= $navigation ?>

        <div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">

            <?php foreach ($blog as $blog_item): ?>
                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-bottom">
                    <h3 class="uk-card-title uk-margin-remove-bottom">
                        <?= $blog_item['title']; ?>
                    </h3>
                    <?php echo $blog_item['description']; ?>
                    <?php echo $blog_item['created_at']; ?>
                    <p><a href="<?php echo site_url('blog/'.$blog_item['id']); ?>">View article</a></p>
                </div>
            <?php endforeach; ?>

        </div>

        <?= $footer ?>

    </body>
</html>