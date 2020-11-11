<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
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
          <a class="button is-primary" href= "<?= base_url();?>user/signup">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light"  href= "<?= base_url();?>user/login">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item uk-logo">blog-app</a>
    </div>

    <div class="uk-navbar-right">
        <div class="uk-navbar-item">
            <a href="blog/create" uk-icon="icon: file-edit"></a>
        </div>
    </div>
</nav>