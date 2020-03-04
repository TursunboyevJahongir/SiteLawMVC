
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            QonunSayt
            <small>Boshqaruv paneli</small>
        </h1>
    </section>

    <!-- Main content -->

    <section class="content">

                <div class="box box-info">

                    <div class="box-header">

                        <h3 class="box-title">Qonunlar
                            <small>Yangi Qonun qo`shish</small>
                        </h3>
                    </div>

                    <div class="box-body pad">
                        <form method="post" >
                            <input type="text" name="title" class="form-control" placeholder="Sarlavha">
                            <br>
                    <textarea id="editor1" name="description" rows="10" placeholder="Tafsilot" cols="80">
                    </textarea>
                            <div class="form-group">
                                <label for="exampleInputFile">Fotosurat</label>
                                <input type="file" name="image" id="exampleInputFile">

                                <p class="help-block">Qonunni MUHIM yoki TAVSIYA QILINGAN'larga qo`yish</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="important">
                                    Muhim Qonun
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="recom">
                                    Tavsiya qilingan Qonun
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Kategoriya</label>
                                <select class="form-control" name="category">
                            <?php foreach ($category as $item):?>
                                    <option  value="<?=$item['id']?>" ><?=$item['name']?></option>
                                <?php endforeach;?>
                                </select>
                                <a  href="?c=admin&m=createcats" style="color: #0f74a8"><b class="hover">Kategoriya Qo'shish <i class="fa fa-plus"></i></b></a>
                            </div>

                            <br>
                            <button  type="submit" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Qo`shish</button>
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
    <strong>Copyright &copy; 2019 | Created By <a href="https://ubtuit.uz">TATU UF</a>.</strong> All rights
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
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
</body>
</html>
