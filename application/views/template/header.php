<html>
<head>
    <title>BLOG-APP</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/uikit.min.css" type= "text/css">
</head>
<body>

        <h1 class="uk-heading-divider">初めてのブログサイト</h1>

    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@s">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
        <li class="uk-active"><a href="#">Active</a></li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
    </ul>
</div>

    <script src="<?= base_url() ?>js/uikit.min.js"></script>
    <script src="<?= base_url() ?>js/uikit-icons.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
</body>
</html>