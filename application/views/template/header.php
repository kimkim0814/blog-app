<html>
<head>
    <title>BLOG-APP</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/uikit.min.css" type= "text/css">
    <link rel="stylesheet" href="<?= base_url() ?>css/blog.css" type= "text/css">
</head>
<body>

<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="<?= base_url() ?>">BLOG-APP</a>

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                    Features
                </a>
            </li>
        </ul>

        <div class="uk-navbar-item">
            <div>Some <a href="#">Link</a></div>
        </div>

        <div class="uk-navbar-item">
            <form action="javascript:void(0)">
                <input class="uk-input uk-form-width-small" type="text" placeholder="Input">
                <button class="uk-button uk-button-default">Button</button>
            </form>
        </div>

    </div>
</nav>
        

   

    <script src="<?= base_url() ?>js/uikit.min.js"></script>
    <script src="<?= base_url() ?>js/uikit-icons.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
</body>
</html>