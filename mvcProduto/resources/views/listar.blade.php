<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos em estoque</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>QUANTIDADE</th>
                <th>PREÇO</th>
                <th>DESCRIÇÃO</th>
                <th>TAMANHO</th>
                <th>PESO</th>
                <th>ID SETOR</th>
                <th>SETOR</th>
                <th>N° CORREDOR</th>
                <th>ATUALIZAR</th>
                <th>DELETAR</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
                <tr>
                       <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->quant }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->detalhe->descricao ?? '' }}</td>
                    <td>{{ $produto->detalhe->tamanho ?? '' }}</td>
                    <td>{{ $produto->detalhe->peso ?? '' }}</td>
                    <td>{{ $produto->setor?->id }}</td>
                    <td>{{ $produto->setor?->nome }}</td>
                    <td>{{ $produto->setor?->numCorredor }}</td>
                    <td>
                        <a href="{{route('produto.atualizar', $produto->id)}}">Atualizar</a>
                    </td>
                    <td>
                        <form action="{{ route('produto.deletar', $produto->id)}}" method="POST" onsubmit="return confirm('Deseja realmente excluir')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>

                </tr>
            @empty
                <tr>
                    <td colspan="12"> Nenhum produto encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
