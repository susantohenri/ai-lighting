<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Dashboard</title>
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
        <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js') ?>"></script>
        <![endif]-->
        <link href="<?= base_url('asset/css/styles.css') ?>" rel="stylesheet">
        <script src="<?= base_url('asset/js/jquery-1.11.1.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>

    </head>
    <body>
        <div class="" style="padding:0px 5px;">
            <div class="row">
                <div class="col-sm-12">
                    
                <?php include_once (APPPATH . "views/{$current['user']['role']}/main-menu.php") ?>

                </div>
            </div>
            
            <div class="row">
                <?= include_once (APPPATH . "views/{$page}.php") ?>
            </div>
        </div>
</body></html>