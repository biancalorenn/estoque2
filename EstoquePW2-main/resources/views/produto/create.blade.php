@extends ('layouts.app')
@section('content')
    <div class="container">
        <form id="frmproduto" name="frmproduto" action="{{ route('produto.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="descricao">descricao</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descricao">
            </div>
            <div class="form-group">
                <label for="complemento">complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Informe o complemento">
            </div>
            <div class="form-group">
                <label for="quantidade">quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Informe a quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
