<div class="col-md-12">
    <div class="panel">
        <div class="box_label text-center">
            <input type="hidden" name="action" id="action">
            <input name="action" id="action" type="hidden">
            <div class="row">
                <div class="col-xs-12">
                    <h4 style="margin:5px 0px;"><strong>HIGH BAYS AND PRICING</strong></h4>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <!--page user-->
            <div class="page" id="">

                <div class="row">
                    <div class="col-xs-12 box_desc">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <a href="<?= site_url("{$current['controller']}/create") ?>" class="btn">Add New</a>
                            </div>
                            <div class="col-xs-12">
                                <div class="table-responsive" style="overflow-x:auto;max-width:100%">
                                    <table cellspasing="0" class="table table-bordered table-condesed table-hover table-model" border="0" cellpadding="0"></table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--close user-->
        </div>
    </div>
        
        
</div>
<link href="<?= base_url('asset/css/jquery.dataTables.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('asset/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('asset/css/datatables.responsive.css') ?>" rel="stylesheet">
<script type="text/javascript" src="<?= base_url('asset/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('asset/js/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('asset/js/datatables.responsive.js') ?>"></script>
<script type="text/javascript">
  window.onload = function () {
    $('.table-model').DataTable({
      bProcessing: true,
      aaData: <?= json_encode($records) ?>,
      aoColumns: <?= json_encode($thead) ?>,
      fnRowCallback: function(nRow, aData, iDisplayIndex ) {
        $(nRow).css('cursor', 'pointer')
        $(nRow).find('td').not(':last').click( function () {
          window.location.href = '<?= site_url($current['controller']) ?>/read/' + aData.uuid
        })
      }
    })
  }
</script>