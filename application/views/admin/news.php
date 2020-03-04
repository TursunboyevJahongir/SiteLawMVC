
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Boshqaruv paneli
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Qonunlar</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nomi</th>
                                    <th>Tafsilot</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($news as $item){ ?>
                                <tr>
                                    <td><?=$item["id"]?></td>
                                    <td><?=$item["title"]?></td>
                                    <td><?=$item["description"]?></td>
                                    <td><div class="tools">
                                            <a class="fa fa-edit fa-2x hover" href="?c=admin&m=newsEdit&id=<?=$item['id']?>"></a>
                                            <a class="fa fa-trash-o fa-2x hover" href="?c=admin&m=NewsDelete&id=<?=$item['id']?>"></a>
                                        </div></td>
                                </tr>
                                <?php }?>

                                </tbody>
                                <div class="box-footer clearfix no-border">
                                    <a href="?c=admin&m=createnews"><button  type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Maqola qo`shish</button></a>
                                </div>
                            </table>

                        </div>

                        <!-- /.box-body -->
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
<!-- DataTables -->
<script src="assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</body>
</html>
