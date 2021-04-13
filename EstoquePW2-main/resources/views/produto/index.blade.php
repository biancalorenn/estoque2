@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Estoque</h2>
    <hr/>
    <a href="{{ url('produto/create') }}" class="btn btn-success">Novo Produto</a>
<br/><br/>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">descricao</th>
                <th scope="col">complemento</th>
                <th scope="col">quantidade</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        @foreach($produto as $produtos)
        <tbody>
            <tr>
                <th>{{ $produtos->id }}</th>
                <th>{{ $produtos->descricao }}</th>
                <td>{{ $produtos->complemento }}</td>
                <td>{{ $produtos->quantidade }}</td>
                <td>
                    <a href="{{ route('produto.edit',$produtos->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ url('produto/delete',['id'=>$produtos->id])}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
