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
<h1><center>Relatorio Venda</center></h1>

<br>
<br>

<!-- lista -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
    <tr>
            <th>Cliente</th>
            <th>Funcionario</th>
            <th>Produto</th>
            <th>Data Compra</th>
            <th>Quantidade Compra</th>
            <th>Total Venda</th>
        </tr>
        
        @foreach($venda as $venda)
        <tr>
        <td>{{$venda->Cliente_id}}</td>
            <td>{{$venda->Funcionario_id}}</td>
            <td>{{$venda->Produto_id}}</td>
            <td>{{$venda->dataCompra}}</td>
            <td>{{$venda->quantidadeCompra}}</td>
            <td>R$:{{$venda->TotalVenda}}</td>
        </tr>    
        @endforeach
    </table>
   </div>
    </div>   
</div>
    
</body>
</html>