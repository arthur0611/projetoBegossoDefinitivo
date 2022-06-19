<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Plataformas</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">




</head>
<body>
<br>
<br>
<h1><center>Relatorio Produto</center></h1>

<br>
<br>

<!-- lista -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
    <tr>
            <th>tipo jogo</th>
            <th>tipo plataforma</th>
            <th>Descrição Produto</th>
            <th>Quantidade Estoque</th>
            <th>valor Compra</th>
            <th>valor Venda</th>
            <th>Data Lançamento</th>
            <th>Empresa</th>
            <th>Classificação Etaria</th>
            <th>classificacao Quantidade</th>
        </tr>
        
        @foreach($produto as $produto)
        <tr>
            <td>{{$produto->tipojogo_id}}</td>
            <td>{{$produto->tipo_plataforma_id}}</td>
            <td>{{$produto->descricaoproduto}}</td>
            <td>{{$produto->quantidadeEstoque}}</td>
            <td>R$:{{$produto->valorCompra}}</td>
            <td>R$:{{$produto->valorVenda}}</td>
            <td>{{$produto->dataLancamento}}</td>
            <td>{{$produto->empresa}}</td>
            <td>{{$produto->classificacaoEtaria}}</td>
            <td>{{$produto->classificacaoQuantidade}}</td>
        </tr>    
        @endforeach
    </table>
   </div>
    </div>   
</div>
    
</body>
</html>