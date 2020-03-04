
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Qonunni tahrirlash
        </h1>
        <ol class="breadcrumb">
            <li><a href="?c=admin"><i class="fa fa-home fa-2x"></i></a></li>
            <li class="active ">Tahrirlash</li>
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">

        <div class="box box-info">

            <div class="box-header">

                <h3 class="box-title">Qonun
                    <small>Tahrirlash</small>
                </h3>
            </div>

            <div class="box-body pad">
                <form method="post" enctype="multipart/form-data" >
                    <input type="text" name="title" value="<?=$item['title']?>" class="form-control" placeholder="Title">
                    <br>
                    <textarea id="editor1" name="description" rows="10" cols="80">
                                            <?=$item['description']?>
                    </textarea>
                    <div class="form-group">
                        <label for="exampleInputFile"> Qonunga doir rasmini tanlang</label>
                        <input type="file" name="image" value="">
                    </div>
                    <div></div>
                    <?if($item['important']==1): ?>
                        <div class="checkbox">

                            <label>
                                <input type="checkbox" value="1" name="important" checked>
                                Important
                            </label>
                        </div>
                    <? endif;?>
                    <?if($item['important']==0): ?>
                    <div class="checkbox">

                        <label>
                            <input type="checkbox" value="1" name="important">
                            Important
                        </label>
                    </div>
                    <?endif;?>
                    <?if($item['recom']==1): ?>
                        <div class="checkbox">

                            <label>
                                <input type="checkbox" value="1" name="recom" checked>
                                Recom
                            </label>
                        </div>
                    <? endif;?>
                    <?if($item['recom']==0): ?>
                        <div class="checkbox">

                            <label>
                                <input type="checkbox" value="1" name="recom">
                                Recom
                            </label>
                        </div>
                    <?endif;?>


                    <select class="form-control" name="category" >
                        <?php foreach ($category as $cat):?>
                            <option  value="<?=$item['id']?>"><?=$cat['name']?></option>
                        <?php endforeach;?>
                            <option  value="<?=$item['id']?>" selected><?=$item['name']?></option>
                    </select>
                    <a  href="?c=admin&m=createcats" style="color: #0f74a8"><b class="hover">Kategoriya Qo'shish <i class="fa fa-plus"></i></b></a>

                    <br>
                    <button  type="submit" class="btn btn-default pull-right"><i class="fa fa-edit"></i> Update news</button>
                </form>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

<div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/admin/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="assets/admin/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<link rel="stylesheet" href="assets/admin/plugins/iCheck/all.css">
<script src="assets/admin/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
        showInputs: false
    })
    })
</script>
</body>
</html>
