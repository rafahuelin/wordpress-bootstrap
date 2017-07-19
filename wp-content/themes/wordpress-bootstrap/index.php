<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wordpress-Bootstrap</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left">

                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container index">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Blog Posts
                        </h3>
                    </div>
                    <div class="panel-body">
                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) :
                                the_post(); ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        IMAGE HERE
                                    </div>
                                    <div class="col-md-9">
                                        <h2><?php echo the_title(); ?></h2>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

</body>
</html>