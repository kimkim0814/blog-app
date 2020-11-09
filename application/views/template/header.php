<html>

<head>
    <title>BLOG-APP</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/uikit.min.css"
        type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>css/blog.css"
        type="text/css">
</head>

<body>

    <nav class="uk-navbar-container uk-margin" uk-navbar>
        <div class="uk-navbar-left">

            <a class="uk-navbar-item uk-logo"
                href="<?= base_url() ?>">BLOG-APP</a>
            <div class="user_login" style = "float:right;">
                <a href="<?= base_url() ?>user/logout" uk-icon="sign-out">LOGOUT</a>
                <a href="<?= base_url() ?>user/signup" uk-icon="user">SIGNUP</a>
            </div>


        </div>
    </nav>




    <script src="<?= base_url() ?>js/uikit.min.js"></script>
    <script src="<?= base_url() ?>js/uikit-icons.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
</body>

</html>