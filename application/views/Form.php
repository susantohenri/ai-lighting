<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">

      <div class="panel-body">
        <form method="POST" action="<?= site_url($current['controller']) ?>" class="form-horizontal form-groups" enctype="multipart/form-data">
        <input type="hidden" name="last_submit" value="<?= time() ?>">        

        <?php foreach ($form as $field) : ?>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?= 'hidden' === $field['type'] ? '' : $field['label'] ?></label>
          <div class="col-sm-7">
            <?php if(in_array($field['type'], array('text', 'hidden', 'file'))): ?>
              <input class="form-control" type="<?= $field['type'] ?>" value="<?= $field['value'] ?>" name="<?= $field['name'] ?>" <?= $field['attr'] ?>>
            <?php elseif('select' === $field['type']): ?>
              <select class="form-control" name="<?= $field['name'] ?>" <?= $field['attr'] ?>>
                <?php foreach ($field['options'] as $opt): ?>
                <option <?= $opt['value'] === $field['value'] || (is_array($field['value']) && in_array($opt['value'], $field['value'])) ? 'selected="selected"':'' ?> value="<?= $opt['value'] ?>"><?= $opt['text'] ?></option>
                <?php endforeach ?>
              </select>
            <?php endif ?>
          </div>
        </div>
        <?php endforeach ?>

        <?php foreach ($subform as $subfield) : ?>
          <hr>
          <div class="form-child" data-controller="<?= $subfield['controller'] ?>" data-uuids="<?= str_replace('"', "'", json_encode($subfield['uuids'])) ?>">
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-8">
                <a class="btn btn-primary btn-sm btn-add">
                  <i class="fa fa-plus"></i> &nbsp;Add <?= $subfield['label'] ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
        <?= !empty($subform) ? '<hr>':'' ?>

        <div class="form-group">
          <div class="col-sm-7 col-sm-offset-3">
            <button class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Save</button>
            <?php if (!empty ($uuid)): ?>
            <a href="<?= site_url($current['controller'] . "/delete/$uuid") ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> &nbsp; Delete</a>
            <?php endif ?>
            <a href="<?= site_url($current['controller']) ?>" class="btn btn-info"><i class="fa fa-arrow-left"></i> &nbsp; Cancel</a>
          </div>
        </div>

        </form>
      </div>

    </div>
  </div>
</div>
<link href="<?= base_url('asset/css/select2.css') ?>" rel="stylesheet">
<link href="<?= base_url('asset/css/select2-bootstrap.css') ?>" rel="stylesheet">
<script type="text/javascript" src="<?= base_url('asset/js/select2.min.js') ?>"></script>
<script type="text/javascript">
  window.onload = function () {

    formInit()
    $('.form-child').each (function () {
      var fchild = $(this)
      var controller = fchild.attr('data-controller')
      var uuids = JSON.parse(fchild.attr('data-uuids').split("'").join('"'))
      for (var u in uuids) $.get('<?= site_url() ?>' + controller + '/subformread/' + uuids[u], function (form) {
        fchild.prepend(form)
        formInit()
      })
      fchild.find('.btn-add').click(function () {
        $.get('<?= site_url() ?>' + controller + '/subformcreate/', function (form) {
          fchild.prepend(form)
          formInit()
        })
      })
    })

  $('.select2-selection__rendered .select2-selection__choice').each(function(){
    atr = this.getAttribute('title');
    if (atr === ''){ $(this).remove(); }
    else if (atr === null){ $(this).remove(); } 
  });    

  }

  function formInit () {
    $('.btn-delete[data-uuid]').click(function () {
      $(this).parent().parent().remove()
    })
    $('select').not('.select2-hidden-accessible').each(function () {
      if ($(this).is ('[data-autocomplete]')) {
        var model = $(this).attr('data-model')
        var field = $(this).attr('data-field')
        $(this).select2({
          ajax: {
            url: '<?= site_url($current['controller']) ?>/select2/' + model + '/' + field,
            type: 'POST', dataType: 'json'
          }
        })
      } else if ($(this).is ('[data-suggestion]')) {
        $(this).select2({
          tags: true,
          createTag: function (params) {
            return {
              id: params.term,
              text: params.term,
              newOption: true
            }
          },
           templateResult: function (data) {
            var $result = $('<span></span>')
            $result.text(data.text)
            if (data.newOption) $result.append('<em> (add new)</em>')
            return $result
          }
        })
      } else $(this).select2()
    })
    $('[data-date="datepicker"]').datepicker({format: 'yyyy-mm-dd', autoclose: true})
    $('[data-date="timepicker"]').timepicker({defaultTime: false, showMeridian: false})
    $('[data-date="datetimepicker"]').daterangepicker({
      singleDatePicker: true,
      timePicker: true,
      timePicker24Hour: true,
      locale: {format: 'YYYY-MM-DD HH:mm:ss'},
      startDate: moment().format('YYYY-MM-DD HH:mm:ss')
    })
  }
</script>