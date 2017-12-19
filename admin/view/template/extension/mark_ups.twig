<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
<!--        <button type="submit" form="form-y" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>  -->
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-cogs"></i> <?php echo $heading_title; ?></h3>
      </div>
      <div class="panel-body">

          <div align="center"  id='loadBar'></div>
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-manufacture" data-toggle="tab"><?php echo $tab_manufacture; ?></a></li>
            <li><a href="#tab-category" data-toggle="tab"><?php echo $tab_category; ?></a></li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="tab-manufacture">
                  <div class="form-group">
                    <label class="col-sm-12"><?php echo $text_etap0; ?></label>
                  </div>
                  <div class="form_manufacture">
                    <form action="#" method="post" id="form_manufacture">
                      <div class="form-group">
                         <label class="col-sm-12"><?php echo $text_etap1m; ?></label>
                         <div class="col-sm-5">
                           <?php
                             foreach ($name_manufacture as $manufacture_name ){
                               $m_del[] = $manufacture_name;
                             }
                             if($n_manufacture){
                               foreach ($n_manufacture as $table_m) {
                                 for ($i = 0, $size = count($m_del); $i < $size; ++$i){
                                   if($table_m['ID'] == $m_del[$i]['manufacturer_id']){
                                       $temp_m[] = $i;
                                   }
                                 }
                               }
                               for ($i = 0, $size = count($temp_m); $i < $size; ++$i){
                                   unset($m_del[$temp_m[$i]]);
                               }
                             }
                           ?>
                         <select class="form-control m-id" name="manufacturer_id" id="id_man">
                            <?php foreach ($m_del as $manufacture_name){ ?>
                              <option <?php echo "value='".$manufacture_name['manufacturer_id']."'"; ?> > <?php echo $manufacture_name['name']; ?> </option>
                            <?php } ?>
                         </select>
                         </div>
                      </div>
                      <div class="form-group required" id="etap2">
                        <label class="col-sm-12"><?php echo $text_etap2; ?></label><br>
                        <label class="col-sm-2"><?php echo $text_procent; ?></label>
                        <div class="col-sm-2 m-procent" >
                          <input type="number" name="procent" id="procent" class="form-control" value="0.00" min="-100" max="1000" step="0.01"/>
                        </div>
                        <label class="col-sm-2"><?php echo $text_cheslo; ?></label>
                        <div class="col-sm-2 m-cheslo" >
                          <input type="number" name="cheslo" id="cheslo" class="form-control" value="0.00" min="-1000" max="1000" step="0.01"/>
                        </div>
                      </div>
                    </form>
                    <div class="form-group">
                      <label class="col-sm-12"><?php echo $text_etap3; ?></label>
                      <div class="col-sm-2">
                        <input type="submit" class="btn btn-primary" id="send_m" value=<?php echo "'".$button_prim."'";?> >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 20px; padding: 10px;">
                    <h3 class="panel-title"><b><?php echo $table_header; ?></b></h3>
                  </div>

                  <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <td class="text-center"><?php echo $table_id;?></td>
                        <td class="text-center"><?php echo $table_name;?></td>
                        <td class="text-center"><?php echo $table_procent;?></td>
                        <td class="text-center"><?php echo $table_cheslo;?></td>
                        <td class="text-center"><?php echo $table_del;?></td>
                        <td class="text-center"><?php echo $table_up;?></td>
                      </tr>
                    </thead>
                    <?php if(!$n_manufacture) { echo "<tr>
                      <td class='text-center'>".$text_no_data."</td>
                      <td class='text-center'>".$text_no_data."</td>
                      <td class='text-center'>".$text_no_data."</td>
                      <td class='text-center'>".$text_no_data."</td>
                      <td class='text-center'>".$text_no_data."</td>
                      <td class='text-center'>".$text_no_data."</td>
                    </tr>"; } else {?>
                    <?php foreach ($n_manufacture as $table_m) { ?>
                      <tr>
                        <td class="text-center"><?php echo $table_m['ID'];?></td>
                        <td class="text-center"><?php echo $table_m['Name_category'];?></td>
                        <td class="text-center"><?php echo $table_m['Procent'];?></td>
                        <td class="text-center"><?php echo $table_m['Cheslo'];?></td>
                        <td class="text-center"><a href="#" id="manufacture-delete" data-toggle="tooltip" title="" class="btn btn-danger manufacture-delete" <?php echo "data-original-title='".$del_help."'"; ?> ><i class="fa fa-trash-o"><input type="hidden" name="id_m" value="<?php echo $table_m['ID']; ?>"/></i></a></td>
                        <td class="text-center">
                          <button type="button" class="btn btn-primary" id="prim" style="display: none;"><?php echo $button_prim; ?></button>
                          <button type="button" class="btn btn-danger" id="del" style="display: none;"><?php echo $button_del; ?></button>
                          <button type="button" class="btn btn-success" id="success" style="display: inline;"><?php echo $button_red; ?></button>
                        </td>
                      </tr>
                    <?php } ?>
                    <?php } ?>
                  </table>

              </div>
            <div class="tab-pane " id="tab-category">
              <div align="center"  id='loadBar'></div>
              <div class="form-group">
                <label class="col-sm-12"><?php echo $text_etap0; ?></label>
              </div>
              <form action="#" method="post" id="form_category">
                <div class="form-group">
                   <label class="col-sm-12"><?php echo $text_etap1c; ?></label>
                   <div class="col-sm-5">
                     <?php
                     foreach ($name_category as $category_name ){
                       $c_del[] = $category_name;
                     }
                     if($n_category){
                        foreach ($n_category as $table_c) {
                          for ($i = 0, $size = count($c_del); $i < $size; ++$i){
                            if($table_c['ID'] == $c_del[$i]['category_id']){
                                $temp_c[] = $i;
                            }
                          }
                        }
                        for ($i = 0, $size = count($temp_c); $i < $size; ++$i){
                            unset($c_del[$temp_c[$i]]);
                        }
                      }
                     ?>
                   <select class="form-control c-id" name="category_id">
                     <?php foreach ($c_del as $category_name){ ?>
                       <option <?php echo "value='".$category_name['category_id']."'"; ?> > <?php echo $category_name['name']; ?> </option>
                     <?php } ?>
                   </select>
                   </div>
                </div>
                <div class="form-group required" id="etap2">
                  <label class="col-sm-12"><?php echo $text_etap2; ?></label><br>
                  <label class="col-sm-2"><?php echo $text_procent; ?></label>
                  <div class="col-sm-2 c-procent">
                    <input type="number" name = "procent"  class="form-control is-valid" value="0.00" min="-100" max="1000" step="0.01"/>
                  </div>
                  <label class="col-sm-2"><?php echo $text_cheslo; ?></label>
                  <div class="col-sm-2 c-cheslo">
                    <input type="number" name = "cheslo"  class="form-control is-valid" value="0.00" min="-100" max="1000" step="0.01"/>
                  </div>
                </div>
              </form>
              <div class="form-group">
                <label class="col-sm-12"><?php echo $text_etap3; ?></label>
                <div class="col-sm-2" >
                  <button type="button" class="btn btn-primary" id="send_c" ><?php echo $button_prim; ?></button>
                </div>
              </div>
              <div class="col-sm-12" style="margin-top: 20px; padding: 10px;">
                <h3 class="panel-title"><b><?php echo $table_header; ?></b></h3>
              </div>
              <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <td class="text-center"><?php echo $table_id;?></td>
                    <td class="text-center"><?php echo $table_name;?></td>
                    <td class="text-center"><?php echo $table_procent;?></td>
                    <td class="text-center"><?php echo $table_cheslo;?></td>
                    <td class="text-center"><?php echo $table_del;?></td>
                    <td class="text-center"><?php echo $table_up;?></td>
                  </tr>
                </thead>
                <?php if(!$n_category) { echo "<tr>
                  <td class='text-center'>".$text_no_data."</td>
                  <td class='text-center'>".$text_no_data."</td>
                  <td class='text-center'>".$text_no_data."</td>
                  <td class='text-center'>".$text_no_data."</td>
                  <td class='text-center'>".$text_no_data."</td>
                  <td class='text-center'>".$text_no_data."</td>
                </tr>"; } else {?>
                <?php foreach ($n_category as $table_c) { ?>
                  <tr>
                    <td class="text-center"><?php echo $table_c['ID'];?></td>
                    <td class="text-center"><?php echo $table_c['Name_category'];?></td>
                    <td class="text-center"><?php echo $table_c['Procent'];?></td>
                    <td class="text-center"><?php echo $table_c['Cheslo'];?></td>
                    <td class="text-center"><a href="#" data-toggle="tooltip" title="" class="btn btn-danger category-delete" <?php echo "data-original-title='".$del_help."'"; ?> ><i class="fa fa-trash-o"><input type="hidden" name="id_c" value="<?php echo $table_c['ID']; ?>"/></i></a></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-primary" id="prim" style="display: none;"><?php echo $button_prim; ?></button>
                      <button type="button" class="btn btn-danger" id="del" style="display: none;"><?php echo $button_del; ?></button>
                      <button type="button" class="btn btn-success" id="success" style="display: inline;"><?php echo $button_red; ?></button>
                    </td>
                  </tr>
                <?php } ?>
                <?php } ?>
              </table>
              </div>
          </div>

          <script type="text/javascript"><!--
        $(document).ready(function() {
          $('#manufacture-delete').click(function(){
          DelC = $(this).find('input');
          $.ajax({
            url: 'index.php?route=module/mark_ups/deleteManufacture&token=<?php echo $token; ?>',
            type: 'post',
            data: DelC,
            dataType: 'json',
            beforeSend: function() {
              console.log('отослано');
              console.log(DelC);
            },
            error: function (json) {
              console.log(json);
            },
            success: function(json) {
              console.log('обработано');
              console.log(json);
              location.reload();
            }
          });
          return false;
          });

        $('.btn.btn-danger.category-delete').click(function(){
        DelC = $(this).find('input');
        $.ajax({
          url: 'index.php?route=module/mark_ups/deleteCategory&token=<?php echo $token; ?>',
          type: 'post',
          data: DelC,
          dataType: 'json',
          beforeSend: function() {
            console.log('отослано');
            console.log(DelC);
          },
          error: function (json) {
            console.log(json);
          },
          success: function(json) {
            console.log('обработано');
            console.log(json);
            location.reload();
          }
        });
        return false;
        });

        $('#send_m').click(function(){
        var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
        $("#loadBar").html(regVr22).show();
          $.ajax({
            url: 'index.php?route=module/mark_ups/addManufacture&token=<?php echo $token; ?>',
            type: 'post',
            data: $('form#form_manufacture').serialize(),
            dataType: 'json',
            beforeSend: function() {
              console.log('отослано');
              //console.log(json);
            },
            error: function (_e) {
              console.log(_e);
              //console.log(json);
            },
            success: function(response) {
              console.log('обработано');
              console.log(response);
              location.reload();
            }
          });
          return false;
        });

        $('#send_c').click(function(){
          var regVr22 = "<div><img style='margin-bottom:-4px;' src='http://oilplus.bestwatch.in.ua/catalog/view/theme/oilplus/image/load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Информация обрабатывается...</span></div><br/>";
          $("#loadBar").html(regVr22).show();
            $.ajax({
              url: 'index.php?route=module/mark_ups/addCategory&token=<?php echo $token; ?>',
              type: 'post',
              data: $('form#form_category').serialize(),
              dataType: 'json',
              beforeSend: function() {
                console.log('отослано');
                //console.log(json);
              },
              error: function (_e) {
                console.log(_e);
                //console.log(json);
              },
              success: function(response) {
                console.log('обработано');
                console.log(response);
                location.reload();
              }
            });
            return false;
          });

        });
        //--></script>


    </div>
  </div>
</div>
<?php echo $footer; ?>
