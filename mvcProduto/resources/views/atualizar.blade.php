<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Produto</title>
</head>
<body>
    <h1>Atualizar Produto</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

     <form action="{{ route('produto.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome..." required value="{{old('nome')}}">

        <br><br>
         <label for="quant">Quantidade: </label>
        <input type="quant" name="quant" id="quant" placeholder="Quantidade..." required value="{{old('quant')}}">

        <br><br>
         <label for="valor">Valor: </label>
        <input type="valor" name="valor" id="valor" placeholder="Valor(R$)..." required value="{{old('valor')}}">

        <button type="submit">Atualizar</button>
    </form>

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>