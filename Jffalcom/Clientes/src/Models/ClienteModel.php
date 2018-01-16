<?php

namespace Jffalcom\Clientes\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{    
    
    protected $fillable = [
        "cli_int_id",
        "cli_str_nome",
        "cli_str_logradouro",
        "cli_int_numero",
        "cli_tex_complemento",
        "cli_str_fone1",
        "cli_str_fone2",
        "cli_str_fone3",
        "cli_str_cep",
        "cli_str_cidade",
        "cli_str_estado",
        "cli_str_bairro",
        "cli_str_email"
    ];

    protected $primarykey = "cli_int_id";

}
