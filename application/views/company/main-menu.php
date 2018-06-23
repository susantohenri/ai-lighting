<nav class="navbar" role="navigation" style="margin-bottom:0px">
<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle glyphicon glyphicon-list" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url() ?>" style="padding:10px"><img src="<?= base_url('asset/img/ai-lighting.png') ?>" class="img-responsive" style="width:100px" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">  
            <li><a href="<?= site_url('Home/Intro') ?>">HOW THE PROGRAM WORKS</a></li>
            <li><a href="<?= site_url('Product') ?>">HIGH BAYS AND PRICING</a></li>
            <li><a href="<?= site_url('Company') ?>">SETTINGS</a></li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="<?= site_url('Guest/Logout') ?>" data-toggle="tooltip" data-placement="left" title="logout"><i class="glyphicon glyphicon-log-out" style="padding:5px 10px"></i></a>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>