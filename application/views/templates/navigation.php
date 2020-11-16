<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?=base_url()?>">
      <button class="button is-primary">BLOG-APP</button>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
      data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="blog/create" uk-icon="icon: file-edit" style="margin-right:20px;"></a>
          <?php if($this->session->userdata("is_logged_in")): ?>
          <a class="button is-primary"
            href="<?= base_url();?>user/logout">
            <strong>Logout</strong>
          </a>
          <?php else :?>
          <a class="button is-primary"
            href="<?= base_url();?>user/login">
            <strong>Login</strong>
          </a>
          <a class="button is-light"
            href="<?= base_url();?>user/signup">
            Signup
          </a>
          <?php endif ;?>
        </div>
      </div>
    </div>
  </div>
</nav>