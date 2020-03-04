
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gallery
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Gallery</li>
        </ol>
    </section>

    <section class="content">

        <div class="box">

            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th></th>
                        <th>Nomi</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($gallery as $item):?>
                        <tr>
                            <td><?=$item["id"]?></td>
                            <td><div class="box-body chat "  id="chat-box">
                                    <!-- chat item -->
                                    <div class="item">
                                        <img  src="assets/images/<?=$item['image']?>" alt="user image" class="online">
                                    </div>
                                </div></td>
                            <td><?=$item["name"]?></td>
                            <td><?=$item["cut_image"]?></td>
                            <td><?=$item["image"]?></td>
                            <td>
                                <div class="tools">
                                <a class="fa fa-edit  fa-2x" href=""></a>
                                <a href="?c=admin&m=imageDelete&id=<?=$item['id']?>" ><i class="fa fa-trash-o  fa-2x"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                <div class="box-footer clearfix no-border">
                    <a href="?c=admin&m=UploadImage">
                        <button  type="button" class="btn btn-default pull-right">
                        <i class="fa fa-plus"></i>
                            Add Image
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
<button >kajsdbkJBSDKJSB</button>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>2019 <a href="https://adminlte.io">Jahongir</a>.</strong>
</footer>
<div class="control-sidebar-bg"></div>
</div>
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
