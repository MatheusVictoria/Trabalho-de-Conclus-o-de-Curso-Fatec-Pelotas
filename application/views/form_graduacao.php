<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de graduação
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Cadastros </a></li>
            <li><a href="#">Graduação</a></li>
        </ol>
    </section>
    <!-- right col -->
    <div>
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div >
                    <!-- general form elements -->
                    <div class="box box-primary">

                        <form role="form" method="post" action="<?= base_url('Graduacao/index') ?>" enctype="multipart/form-data">

                            <div class="box-body">
                                
                                 <div class="col-lg-12">
                                    <?php if ($erro): ?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                                            <ul>
                                                <?= $erro ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="cor">Cor:</label>
                                    <input type="text" class="form-control" id="cor" name="cor" value="<?= set_value('cor') ?>" placeholder="Cor"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" class="form-control" id="descricao" name="descricao" value="<?= set_value('descricao') ?>" placeholder="Descrição"/>
                                </div>

                                <div class="box-footer col-lg-offset-2 ">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary btn-flat col-xs-4">Enviar</button>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="reset" class="btn btn-primary btn-flat col-xs-4">Limpar</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
   
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

