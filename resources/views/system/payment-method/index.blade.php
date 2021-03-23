@extends('layouts.adminlte')

@section('adminlte_content')
    <section class="content-header">
        <h1>
            Métodos de Pagamento
            <small>lista dos meios utilizado para pagamentos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Lister</a></li>
            <li class="active">Criar</li>
        </ol>
    </section>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Métodos de Pagamento</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-light-blue">30%</span></td>
                </tr>

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
@endsection
