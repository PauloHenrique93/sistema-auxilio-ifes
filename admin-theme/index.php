<!doctype html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Painel</title>
        <meta name="description" content="Painel do sistema">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icons -->
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Style -->
        <link rel="stylesheet" href="css/style.min.css">

    </head>
    <body>

        <div class="main">

            <div class="top-bar">

                    <div class="top-bar-brand">

                        <div class="menu-icon"></div>
                        
                        <div class="top-bar-item">
                            <?php include('/ui/logo.php') ?>
                        </div>

                    </div>

                    <div class="top-bar-nav">

                        <?php include('/ui/dropdown.php') ?>

                    </div>

            </div>

            <?php include('/ui/title.php') ?>

            <?php include('/ui/logo.php') ?>

            Teste Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, eos, perferendis totam soluta natus impedit ab quod in porro fugit? Ab, praesentium, odit voluptatum culpa facere dicta consectetur aut voluptate?


        </div>
        
        <script src="js/main.min.js"></script>

        <!-- Livereload -->
        <script src="http://localhost:35729/livereload.js"></script>

    </body>
</html>