@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="title-page">Novo Cliente</h3>
            <div class="panel panel-padrao">
                <div class="panel-heading"></div>
                <div class="panel-body">

                    @if($errors->any())
                        <ul class="alert alert-danger" style="list-style: none;">
                            @foreach($errors->all() as $error)
                                   <li> {{ $error  }} </li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(array('route' => 'clienteStore')) !!}
                        @include("Jffalcom.Cliente._form_cliente")
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
@stop