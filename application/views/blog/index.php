<?php foreach ($blog as $blog_item): ?>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m" style="margin-bottom:10px; ">
        <h3><?php echo $blog_item['title']; ?></h3>
        <div class="main">
                <?php echo $blog_item['description']; ?>
                <?php echo $blog_item['created_at']; ?>
        </div>
        <p><a href="<?php echo site_url('blog/'.$blog_item['id']); ?>">View article</a></p>
</div>
<?php endforeach; ?>

<button class="uk-button uk-button-primary" onclick="location.href='blog/create'">投稿画面へ</button>
