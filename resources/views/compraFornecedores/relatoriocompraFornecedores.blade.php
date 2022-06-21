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
<h1><center>Relatorio Compra Funcionario</center></h1>
<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
        <tr>
            <th>Fornecedor</th>
            <th>Produto</th>
            <th>Data Compra</th>
            <th>Total Comprado</th>
            <th>valor Total</th>
        </tr>

        @foreach($compraFornecedor as $compraFornecedor)
        <tr>
            <td>{{$compraFornecedor->Fornecedor_id}}</td>
            <td>{{$compraFornecedor->Produto_id}}</td>
            <td>{{$compraFornecedor->dataCompra}}</td>
            <td>{{$compraFornecedor->totalComprado}}</td>
            <td>{{$compraFornecedor->valorTotalCFornecedores}}</td>
        </tr>    
        @endforeach
    </table>
        </div>
    </div>   
</div>
</body>