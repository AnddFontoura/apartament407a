@extends('layouts.adminlte')

@section('adminlte_content')
  <div class="row">
      <div class="col-md-6">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->keys() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method='POST' action="{{ url('payment/save') }}">
          @csrf
          <div class="card">
              <div class="card-header">
                Novo Pagamento
              </div>

              <div class="card-body">
                <div class="row">

                  <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="form-group">
                      <label for="customerField">Pagar/Receber a/de</label>
                      <select name='customer_id' id='customerField' class='select2 form-control'>
                      @foreach($customers as $customer)
                        <option value='{{ $customer->id }}'> {{ $customer->name }} </option>
                      @endforeach
                      </select>
                    </div>

                    @error('provider_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="form-group">
                      <label for="paymentTypeField">Tipo de Pagamento</label>
                      <select name='payment_type_id' id='paymentTypeField' class='select2 form-control'>
                      @foreach($payment_types as $payment_type)
                        <option value='{{ $payment_type->id }}'> {{ $payment_type->name }} </option>
                      @endforeach
                      </select>
                    </div>

                    @error('payment_type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>


                  <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="form-group">
                      <label for="paymentMethodField">Metodo de Pagamento</label>
                      <select name='payment_method_id' id="paymentMethodField" class='select2 form-control'>
                      @foreach($payment_methods as $payment_method)
                        <option value='{{ $payment_method->id }}'> {{ $payment_method->name }} </option>
                      @endforeach
                      </select>
                    </div>

                    @error('payment_type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>


                  <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="form-group">
                      <label for="dueDateField">Data de Vencimento</label>
                      <input name="due_date" type="date" class="form-control" id="dueDateField" placeholder="xx/xx/xxxx">
                    </div>

                    @error('due_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="form-group">
                      <label for="valueField">Valor do Pagamento</label>
                      <input name="value" type="text" class="form-control" id="valueField" pattern="[0-9.]{1,12},[0-9]{2,8}" placeholder="xxxx,xx">
                    </div>

                    @error('value')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="form-group">
                      <label for="barCodeField">Código de Barras</label>
                      <textarea name='bar_code' class='form-control'> </textarea>
                    </div>

                    @error('bar_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>


                  <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="form-group">
                      <label for="descriptionField">Descrição</label>
                      <textarea name='description' class='summernote'> </textarea>
                    </div>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button type='submit' class='btn btn-success'> Salvar Pagamento </button>
              </div>
          </div>
        </form>
      </div>
  </div>
@endsection
