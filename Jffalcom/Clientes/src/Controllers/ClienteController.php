<?php

namespace Jffalcom\Clientes\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jffalcom\Clientes\Models\ClienteModel;

class ClienteController extends Controller
{
    private $clienteModel;

    public function __construct(ClienteModel $cliente){
        $this->clienteModel = $cliente;
    }

    public function index(Request $request){

        $busca = $request->input("busca");
        $cliente = $this->clienteModel
            ->where("cli_str_nome", "like", "%".$busca."%")
            ->orderBy("cli_str_nome")
            ->paginate(10);

        return view("cliente.lista", compact("cliente"));
    }

    public function create(){
        return view("Jffalcom.Clientes.create");
    }

    public function store(Request $request){

        $this->validate($request, [
            'cli_str_nome' => 'required',
            "cli_str_fone1" => "required"
        ],[
            "cli_str_nome.required" => "O campo Nome do cliente não pode ser vazio",
            "cli_str_fone1.required" => "Pelo menos 1 telefone deve ser cadastrado"
        ]);

        $input = $request->all();
        $clienteModel = $this->clienteModel->fill($input);
        $clienteModel->save();

        session()->flash("message", "Cliente cadastrado com sucesso!");

        return redirect()->route("clienteIndex");

    }

    public function delete($id){
        $this->clienteModel->find($id)->delete();

        session()->flash("message", "Cliente Excluido com sucesso!");

        return redirect()->route("clienteIndex");
    }

    public function edit($id){

        $cliente = $this->clienteModel->where("cli_int_id", $id)->first();
        return view("cliente.edit", compact("cliente"));

    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'cli_str_nome' => 'required',
            "cli_str_fone1" => "required"
        ],[
            "cli_str_nome.required" => "O campo Nome do cliente não pode ser vazio",
            "cli_str_fone1.required" => "Pelo menos 1 telefone deve ser cadastrado"
        ]);

        $this->clienteModel->where("cli_int_id", $id)->update($request->except(['_token']));

        session()->flash("message", "Cliente Alterado com sucesso!");

        return redirect()->route("clienteIndex");
    }

}
