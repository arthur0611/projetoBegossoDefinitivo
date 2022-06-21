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


<div class="container">
    <h1><center>Relatorio Pagamento Fornecedores</center></h1>
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
        <tr>
            <th>Compra Fornecedor</th>
            <th>Data Pagamento</th>
            <th>Parcela</th>
        </tr>

        @foreach($pagamentoFornecedor as $pagamentoFornecedor)
        <tr>
            <td>{{$pagamentoFornecedor->compra_fornecedors_id}}</td>
            <td>{{$pagamentoFornecedor->DataPagamento}}</td>
            <td>{{$pagamentoFornecedor->Parcela}}</td>
        </tr>    
        @endforeach
    </table>
  </div>
    </div>   
</div>