<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Clients;

class ClientController extends Controller
{
    private $request;
    private $clients;

	public function __construct(Request $request, Clients $clients)
	{
		$this->middleware('guest');

        $this->request = $request;
        $this->clients = $clients;
	}

    public function adicionar()
    {
        return view('client');

    }

    public function editar ($id)
    {
        $clients = \App\Models\Clients::find($id);
        if(!$clients){
            \App\Models\Clients::flash('flash_message', [
                'msg'=>"Não existe esse cliente cadastrado, Deseja Cadastrar novo Cliente?",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('cliente.adicionar');
        }
        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(Request $request,$id)
    {
        \App\Models\Clients::find($id)->update($request->all());

        Clients::flash('flash_message',[
            'msg'=>"Client atualizado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client.index');

    }
    public function deletar($id)
    {
        $clients = Clients::find($id);


        if(!$clients->deletarTelefone()){
            \App\Models\Clients::flash('flash_message', [
                'msg'=>"Registro não pode ser deletado",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('client.index');
        }
        $clients->delete();
         \App\Models\Clients::flash('flash_message',[
            'msg'=>"Cliente atualizado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('client.index');

    }


	public function index()
	{

        return view('client');
	}

}
