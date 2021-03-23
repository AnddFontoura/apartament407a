@extends('layouts.adminlte')

@section('adminlte_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Listagem
                </div>

                <div class="card-body">
                  @if(count($payments) == 0)
                    <div class="alert alert-danger alert-dismissible mb-0">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
                      Nenhum registro encontrado nessa sessão.
                    </div>
                  @else
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Valor</th>
                          <th>Tipo</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach($payments as $payment)
                          <td>{{ $payment->id }}</td>
                          <td>{{ number_format($payment->value,2,',','.') }}</td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  @endif
                </div>

                <div class="card-footer">
                  {{ $payments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
