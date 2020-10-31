<?php foreach ($blog as $blog_item): ?>
<div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light" style="margin-bottom:10px; width:400px; ">
        <h3><?php echo $blog_item['title']; ?></h3>
        <div class="main">
                <?php echo $blog_item['description']; ?>
                <?php echo $blog_item['created_at']; ?>
        </div>
        <p><a href="<?php echo site_url('blog/'.$blog_item['id']); ?>">View article</a></p>
</div>
<?php endforeach; ?>

<button class="uk-button uk-button-primary" onclick="location.href='blog/create'">投稿画面へ</button>
