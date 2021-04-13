<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller
{

    public function index()
    {
        $produto = Produto::All();
        return view('produto.index', compact('produto'));
    }


    public function create()
    {
        $produto = Produto::All();
        return view('produto.create', compact('produto'));
    }


    public function store(ProdutoRequest $request)
    {
        $produto = new Produto();
        $produto->descricao = $request->input('descricao');
        $produto->complemento = $request->input('complemento');
        $produto->quantidade = $request->input('quantidade');
        $produto->save();
        return redirect()->route('produto.index', compact('produto'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            return view('produto.edit', compact('produto'));
        }
            return view('produto.index');
    }

    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->descricao = $request->input('descricao');
            $produto->complemento = $request->input('complemento');
            $produto->quantidade = $request->input('quantidade');
            $produto->save();
        }
            return redirect()->route('produto.index', compact('produto'));
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->delete();
        }
            return redirect()->route('produto.index');
            
    }
}
