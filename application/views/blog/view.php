<!DOCTYPE html>
<html lang="ja">

<?= $header ?>

<body>

  <?= $navigation ?>

  <div class="card" style="width:300px;margin-top:30px;">
    <header class="card-header">
      <p class="card-header-title">
        <?= $blog_item['title']; ?>
      </p>
      <a href="#" class="card-header-icon" aria-label="more options">
        <span class="icon">
          <i class="fas fa-angle-down" aria-hidden="true"></i>
        </span>
      </a>
    </header>
    <div class="card-content" style="height:130px;">
      <div class="content">
        <?php echo $blog_item['description']; ?>
        <br>
        <time
          datetime="<?= $blog_item['created_at']?>">11:09
          PM - 1 Jan 2016</time>
      </div>
    </div>

  </div>
</body>

</html>