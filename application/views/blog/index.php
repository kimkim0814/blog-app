<?php foreach ($blog as $blog_item): ?>

<h3><?php echo $blog_item['title']; ?></h3>
<div class="main">
        <?php echo $blog_item['description']; ?>
</div>
<p><a href="<?php echo site_url('blog/'.$blog_item['id']); ?>">View article</a></p>

<?php endforeach; ?>