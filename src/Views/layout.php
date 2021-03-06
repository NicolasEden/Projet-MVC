<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./assets/css/edennews/Auth.css"/>
    <link rel="stylesheet" href="./assets/css/edennews/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="./assets/js/edennews/main.js" defer></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({ // Mise en place d'un textarea pour l'envoie de nouveau article (Envoie d'article non fonctionnelle)
            /* replace textarea having class .tinymce with tinymce editor */
            selector: "#editor",

            /* width and height of the editor */
            width: "100%",
            height: 600,

            /* display statusbar */
            statubar: true,

            /* plugin */
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],

            /* toolbar */
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

            /* style */
            style_formats: [
                {title: "Headers", items: [
                        {title: "Header 1", format: "h1"},
                        {title: "Header 2", format: "h2"},
                        {title: "Header 3", format: "h3"},
                        {title: "Header 4", format: "h4"},
                        {title: "Header 5", format: "h5"},
                        {title: "Header 6", format: "h6"}
                    ]},
                {title: "Inline", items: [
                        {title: "Bold", icon: "bold", format: "bold"},
                        {title: "Italic", icon: "italic", format: "italic"},
                        {title: "Underline", icon: "underline", format: "underline"},
                        {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
                        {title: "Superscript", icon: "superscript", format: "superscript"},
                        {title: "Subscript", icon: "subscript", format: "subscript"},
                        {title: "Code", icon: "code", format: "code"}
                    ]},
                {title: "Blocks", items: [
                        {title: "Paragraph", format: "p"},
                        {title: "Blockquote", format: "blockquote"},
                        {title: "Div", format: "div"},
                        {title: "Pre", format: "pre"}
                    ]},
                {title: "Alignment", items: [
                        {title: "Left", icon: "alignleft", format: "alignleft"},
                        {title: "Center", icon: "aligncenter", format: "aligncenter"},
                        {title: "Right", icon: "alignright", format: "alignright"},
                        {title: "Justify", icon: "alignjustify", format: "alignjustify"}
                    ]}
            ]
        });
    </script>

    <title><?= $titre.' ??? EDEN News' ?></title>

</head>
    <body>
        <header>
            <div class="container">
                <div class="row d-flex flex-column flex-lg-row flex-md-row">
                    <div class="col-md-6 col-lg-6 col-sm-12 text-sm-center text-md-left text-lg-left">
                        <div>
                            <p id="todayDate"></p>
                        </div>
                        <div class="d-flex justify-content-lg-start justify-content-md-start justify-content-sm-center">
                            <div class="col-4 d-flex-space icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-tumblr"></i>
                                <i class="fas fa-rss"></i>
                            </div>
                        </div>
                    </div>
                    <div class="spacerdiv d-lg-none d-md-none d-sm-block"></div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="d-flex header-top-right justify-content-lg-end justify-content-md-end justify-content-sm-center">
                            <span class="d-flex underline-lightgrey">
                                <a href="/auth">login</a>
                                /
                                <a href="/auth">register</a>
                            </span>
                            <span class="d-flex underline-black">
                                <button>FR <i class="fas fa-chevron-down"></i></button>
                            </span>
                        </div>
                        <div class="text-lg-right text-md-right text-sm-center icons">
                            <i class="fas search fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="spacerdiv"></div>
                <div class="spacerdiv d-lg-none d-md-none d-sm-block"></div>
                <div class="spacerdiv d-lg-none d-md-none d-sm-block"></div>
                <div class="row text-center">
                    <div class="col-12"><img src="./assets/img/logo-omega.png"/></div>
                </div>
                <div class="row text-center header-nav-div">
                    <div class="col-12 d-flex-inline nav">
                        <nav class="col-12">
                            <ul class="col-12 ul-nav flex-column flex-lg-row flex-md-row">
                                <li><a href="/">News</a></li>
                                <li><a href="#">Cat??gories</a></li>
                                <li><a href="#">Auteurs</a></li>
                                <li><a href="#">Galerie</a></li>
                                <li><a href="#">Contact</a></li>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div id="contenu">
            <?php echo $content; ?>
        </div>
    </body>
</html>
<?php
unset($_SESSION['error'], $_SESSION['old']);
