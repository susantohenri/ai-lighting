<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">

      <div class="panel-body">
        <form method="POST" action="<?= site_url($current['controller']) ?>" class="form-horizontal form-groups" enctype="multipart/form-data">
        <input type="hidden" name="last_submit" value="<?= time() ?>">
        <input type="hidden" name="delete" value="<?= $uuid ?>">

        <div class="text-center">
          <h1>Are You Sure ?</h1>
          <button class="btn btn-danger"><i class="fa fa-check"></i> &nbsp; Yes</button>
          <a href="<?= site_url($current['controller']) ?>" class="btn btn-info"><i class="fa fa-arrow-left"></i> &nbsp; No</a>
        </div>

        </form>
      </div>

    </div>
  </div>
</div>