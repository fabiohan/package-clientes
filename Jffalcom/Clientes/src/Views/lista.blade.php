@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="title-page">Clientes</h3>
            <div class="panel">
                <div class="panel-heading"></div>
                <div class="panel-body">

                    @if(session()->has("message"))
                        <div class="alert alert-success" role="alert">{{ session("message") }}</div>
                    @endif

                    <div class="form-group">
                        {!! Form::open(['route' => 'clienteIndex',"","method" => "get" ]) !!}

                        <div class="col-lg-7">
                            <a href="<?php echo route("clienteCreate");?>" class="btn btn-success">Novo Cliente</a>
                        </div>
                        <div class="col-lg-5">
                            <div class="input-group">
                            {!! Form::text('busca', null, array("class"=>'form-control', "placeholder"=>"Digite o que deseja buscar")) !!}
                                <span class="input-group-btn">
                                    {!! Form::submit('Buscar', array("class"=>"btn btn-primary")) !!}
                                </span>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                    <hr />


                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr class="table-padrao">
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Fones</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($cliente as $cli)
                            <tr>
                                <td>{{$cli->cli_str_nome}}</td>
                                <td>{{$cli->cli_str_email}}</td>
                                <td>{{$cli->cli_str_fone1}}</td>
                                <td>
                                    <a href="{{ route("clienteDelete", ["id" => $cli->cli_int_id]) }}" data-name="{{$cli->cli_str_nome}}" class="btn btn-danger btn-sm remove">Deletar</a>
                                    <a href="{{ route("clienteEdit", ["id" => $cli->cli_int_id]) }}" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="6" class="text-center">Não há registros</td> </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6" class="text-right">
                                {!! $cliente->appends(Request::input())->links() !!}
                            </td>
                        </tr>

                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
    </div>
@stop