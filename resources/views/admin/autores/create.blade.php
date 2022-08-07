@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Autores') }}</div>

                <div class="card-body">
                    <form>
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Nome">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control"  placeholder="Descrição">
                          </div>
                        </div> 
                        
                        <br>
                        
                        <button type="submit" class="btn btn-success">Enviar</button>

                          
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
