<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>TellPosta</title>
                    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
                    <meta name="description" content="<?php echo $meta_description; ?>" />
                    <meta name="copyright" content="<?php echo $meta_copywrite; ?>" />

                    <?php
                    foreach ($styles as $file => $type) {
                        echo HTML::style($file, array('media' => $type)), "\n";
                    }
                    ?>
                    <?php
                    foreach ($scripts as $file) {
                        echo HTML::script($file), "\n";
                    }
                    ?>
                    </head>

                    <body>

                        <div class="container">
                            <div class="header clearfix">
                                <nav>
                                    <ul class="nav nav-pills pull-right">
                                        <!--<li role="presentation" class="active"><a href="#">Home</a></li>-->
                                        <li role="presentation"><a href="#">Вход</a></li>
                                        <li role="presentation"><a href="#">Регистрация</a></li>
                                    </ul>
                                </nav>
                                <h3 class=""><img style="max-width:15%;" src="www/img/logo_mini.png" alt="TellPosta"></img></h3>
                            </div>

                            <?= $content ?>
                            
                            <footer class="footer">
                                <p>&copy; 2016 Tellposta, Inc.</p>
                            </footer>

                        </div> <!-- /container -->

                    </body>
                    </html>
