<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $config["app"]["title"] . (strlen($page_title) ? " - {$page_title}" : ""); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-inverse navbar-fixed-top">
            <a class="navbar-brand" href="./"><?= $config["app"]["title"] ?></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item  <?= ($_GET['action'] == 'something') ? "active" : "";?>">
                        <a class="nav-link" href="./?action=something">
                            <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i> Something
                        </a>
                    </li>
                </ul>
            </div>
            -->
        </nav>
        <div class="container">
            <?php if (isset($success_message)) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?= $success_message ?>
                </div>
            <?php endif; ?>
            <?php if (isset($info_message)) : ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?= $info_message ?>
                </div>
            <?php endif; ?>
            <?php if (isset($warning_message)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?= $warning_message ?>
                </div>
            <?php endif; ?>
            <?php if (isset($error_message)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?= $error_message ?>
                </div>
            <?php endif; ?>
