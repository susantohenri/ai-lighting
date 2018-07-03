
<nav class="navbar" role="navigation" style="margin-bottom:0px">
<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle glyphicon glyphicon-list" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url() ?>" style="padding:5px; margin:0px 10px"><img src="<?= base_url('asset/img/ai-white.png') ?>" class="img-responsive" style="width:75px" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


        <ul class="nav navbar-nav hidden-lg">  
            <li><a href="<?= site_url('Home/Intro') ?>">ABOUT</a></li>
            <li><a href="<?= site_url('Home/Instructions') ?>">INSTRUCTIONS</a></li>
            <li><a href="<?= site_url('Product') ?>">HIGH BAYS AND PRICING</a></li>
            <li><a href="<?= site_url('Home/Project') ?>">PROJECT APPLICATION FORM</a></li>
            <li><a href="<?= site_url('Company') ?>">SETTINGS</a></li>
            <li><a href="<?= base_url('asset/file/Doccument_Pack_V1.pdf') ?>" target="_blank">DOWNLOAD DOCUMENT PACK</a></li>
        </ul>
        <ul class="nav navbar-right navbar-nav hidden-lg">
          <li class="dropdown">
            <a href="<?= site_url('Guest/Logout') ?>" data-toggle="tooltip" data-placement="left" title="logout"><i class="glyphicon glyphicon-log-out" style="padding:5px 10px"></i></a>
          </li>
        </ul>
        
        
        <ul class="nav navbar-right navbar-nav show-lg hidden-xs hidden-md hidden-sm">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list" style="padding:5px 10px"></i></a>
                <ul class="dropdown-menu">  
                <li><a href="<?= site_url('Home/Intro') ?>">ABOUT</a></li>
                <li><a href="<?= site_url('Home/Instructions') ?>">INSTRUCTIONS</a></li>
                <li><a href="<?= site_url('Product') ?>">HIGH BAYS AND PRICING</a></li>
                <li><a href="<?= site_url('Home/Project') ?>">PROJECT APPLICATION FORM</a></li>
                <li><a href="<?= site_url('Company') ?>">SETTINGS</a></li>
                <li><a href="<?= base_url('asset/file/Doccument_Pack_V1.pdf') ?>" target="_blank">DOWNLOAD DOCUMENT PACK</a></li>
                <li>
                    <a href="<?= site_url('Guest/Logout') ?>" data-toggle="tooltip" data-placement="left" title="logout"><i class="glyphicon glyphicon-log-out" style="padding:5px 10px"></i></a>
                </li>
            </ul>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>