<?php
// estou no AlunoController.php
namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function listar(){
        $query = Produto::query();
        $produtos = $query->get(); // select * from produtos
        return view('listar', compact('produtos'));
    }

    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255|unique:produtos,nome',
            'quant' => 'required|string',
            'valor' => 'required|string'
        ]);

        Produto::create([
            'nome' => $request->nome,
            'quant' => $request->quant,
            'valor' => $request->valor
        ]);

        return redirect()->back()->with('success','Produto Cadastrado com sucesso!');

    }

    public function atualizar($id){
        $produto = Produto::findOrFail($id); // Busca o produto pelo ID
        // select * from produto where id = $id
        return view('atualizar', compact('produto'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => "required|string|max:255|unique:produtos,nome,$id",
            'quant' => 'required|string',
            'valor' => 'required|string'
        ]);

        $produto = Produto::findOrFail($id); // buscar produto para ser atualizado

        $produto->nome = $request->nome; // atualizando o campo nome
        $produto->quant = $request->quant; // atualizando o campo quant
        $produto->valor = $request->valor; // atualizando o campo valor

        $produto->save(); // salvando no banco de dados(fazendo update)
        return redirect()->back()->with('success','Produto atualizado com suceso');
    }

     public function deletar($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produto.listar')->with('success', 'Produto excluido com sucesso');
    }
}

