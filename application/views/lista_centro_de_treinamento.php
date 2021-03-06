
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas</a></li>
            <li><a href="#">Alunos</a></li>
        </ol>
    </section>
    <section>
        <!-- right col -->
        <div>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Lista de Alunos</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Rua</th>
                                            <th>Numero</th>
                                            <th>Complemento</th>
                                            <th>Cep</th>
                                            <th>Bairro</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>Pais</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($centro as $ct) { ?>
                                            <tr>
                                                <td><?= $ct->id ?></td>
                                                <td><?= $ct->nome ?></td>
                                                <td><?= $ct->endereco_id ?></td>
                                                <td><?= $ct->numero ?></td>
                                                <td><?= $ct->complemento ?></td>
                                                <td><?= $ct->cep ?></td>
                                                <td><?= $ct->bairro ?></td>
                                                <td><?= $ct->cidade_id ?></td>
                                                <td><?= $ct->estado_id ?></td>
                                                <td><?= $ct->pais_id ?></td>
                                                <td>

                                                    <a data-toggle="tooltip" data-placement="top" title="Editar!" href="<?= base_url('centro_de_treinamento/editar/' . $ct->id) ?>" >
                                                        <span class="fa fa-edit"></span></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar!" href="<?= base_url('centro_de_treinamento/editar/' . $ct->id) ?>">
                                                        <span class="fa fa-vcard"></span></a>
                                                </td>

                                            <?php } ?>
                                        </tr>
                                        </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

    </section>
    <!-- /.content -->



