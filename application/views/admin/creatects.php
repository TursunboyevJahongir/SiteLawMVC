
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            QonunSayt
            <small>Boshqaruv paneli</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="?c=admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">kategoriya qo'shish</li>
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">

        <div class="box box-info">

            <div class="box-header">

                <h3 class="box-title">Kategoriyalar
                    <small>Yangi kategoriya qo`shish</small>
                </h3>
            </div>

            <div class="box-body pad">

                <form method="post" action="?c=admin&m=createcats">
                    <input type="text" name="name" class="form-control" placeholder="Kategoriya nomi">
                    <br>
                    <button  type="submit" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Qo`shish</button>
                </form>
            </div>
        </div>

    </section>

    <!-- /.content -->
</div>
