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
<h1><center>Relatorio Fornecedor</center></h1>

<br>
<br>

<!-- lista -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Nome Fantasia</th>
            <th>Endereco</th>
            <th>Contato</th>
            <th>CEP</th>
            <th>Site</th>
        </tr>

        @foreach($fornecedor as $fornecedor)
        <tr>
            <td>{{$fornecedor->nome}}</td>
            <td>{{$fornecedor->cnpj}}</td>
            <td>{{$fornecedor->nomeFantasia}}</td>
            <td>{{$fornecedor->endereco}}</td>
            <td>{{$fornecedor->contato}}</td>
            <td>{{$fornecedor->cep}}</td>
            <td>{{$fornecedor->site}}</td>
        </tr>    
        @endforeach
    </table>
   </div>
    </div>   
</div>
    
</body>
</html>