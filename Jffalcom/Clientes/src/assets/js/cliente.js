var cliente = {
    cep:function(){
        
        $("#cli_str_cep").on("keyup", function(){

            var cep = $(this).val();

            if(cep.length == 8){

                $(".status-cep").html("<span class='label label-primary'>Buscando...</span>");

                $.post("http://www.jffalcom.com.br/lib/cep/?cep="+cep,{}, function(data){

                    if(typeof data.logradouro == "undefined"){

                        $(".status-cep").html("<span class='label label-danger'>Cep Não Encontrado</span>");

                    }else{

                        $(".status-cep").html("<span class='label label-success'>Cep Encontrado</span>");

                        $("#cli_str_logradouro").val(data.tipo + " " + data.logradouro);
                        $("#cli_str_bairro").val(data.bairro);
                        $("#cli_str_cidade").val(data.cidade);
                        $("#cli_str_estado").val(data.uf);

                    }

                }, "json");
            }
        });
    }
}