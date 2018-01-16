<p>Preencha os campos abaixo para cadastro de nova revenda.</p>
<div class="form-group col-lg-9">
    <div class="col-lg-12">
        {!! Form::label('cli_str_nome', 'Nome do Cliente', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::text('cli_str_nome', null, array("class"=>'form-control')) !!}
    </div>
</div>

<div class="form-group col-lg-12">
    <div class="col-lg-12">
        {!! Form::label('cli_str_cep', 'Cep', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-4">
        {!! Form::text('cli_str_cep', null, array("class"=>'form-control')) !!}
    </div>
</div>

<div class="form-group col-lg-6">
    <div class="col-lg-12">
        {!! Form::label('cli_str_logradouro', 'Logradouro', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::text('cli_str_logradouro', null, array("class"=>'form-control')) !!}
    </div>
</div>

<div class="form-group col-lg-2">
    <div class="col-lg-12">
        {!! Form::label('cli_int_numero', 'Número', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::text('cli_int_numero', null, array("class"=>'form-control')) !!}
    </div>
</div>

<div class="form-group col-lg-4">
    <div class="col-lg-12">
        {!! Form::label('cli_str_bairro', 'Bairro', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::text('cli_str_bairro', null, array("class"=>'form-control')) !!}
    </div>
</div>

<div class="form-group col-lg-6">
    <div class="col-lg-12">
        {!! Form::label('cli_tex_complemento', 'Complemento', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::text('cli_tex_complemento', null, array("class"=>'form-control')) !!}
    </div>

</div>

<div class="form-group col-lg-3">
    <div class="col-lg-12">
        {!! Form::label('cli_str_cidade', 'Cidade', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::text('cli_str_cidade', null, array("class"=>'form-control')) !!}
    </div>
</div>

<div class="form-group col-lg-3">
    <div class="col-lg-12">
        {!! Form::label('cli_str_estado', 'Estado', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::text('cli_str_estado', null, array("class"=>'form-control')) !!}
    </div>
</div>

<div class="form-group col-lg-12">
    <div class="col-lg-12">
        {!! Form::label('cli_str_email', 'E-mail', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-6">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            {!! Form::text('cli_str_email', null, array("class"=>'form-control')) !!}
        </div>

    </div>
</div>

<div class="form-group col-lg-4">
    <div class="col-lg-12">
        {!! Form::label('cli_str_fone1', 'Fone 1', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
            {!! Form::text('cli_str_fone1', null, array("class"=>'form-control')) !!}
        </div>

    </div>
</div>

<div class="form-group col-lg-4">
    <div class="col-lg-12">
        {!! Form::label('cli_str_fone2', 'Fone 2', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
            {!! Form::text('cli_str_fone2', null, array("class"=>'form-control')) !!}
        </div>

    </div>
</div>

<div class="form-group col-lg-4">
    <div class="col-lg-12">
        {!! Form::label('cli_str_fone3', 'Fone 3', array('class' => 'control-label')) !!}
    </div>
    <div class="col-lg-12">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
            {!! Form::text('cli_str_fone3', null, array("class"=>'form-control')) !!}
        </div>

    </div>
</div>

<div class="form-group col-lg-12">
    <div class="col-lg-12 text-right">
        {!! Form::submit('Salvar', array("class"=>"btn btn-primary")) !!}
    </div>
</div>

@section("js")

@stop