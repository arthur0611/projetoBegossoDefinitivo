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
<center>Relatorio Cliente</center>
<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Bairro</th>
            <th>Rua</th>
            <th>CPF</th>
        </tr>

        @foreach($cliente as $cliente)
        <tr>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->idade}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->cidade}}</td>
            <td>{{$cliente->estado}}</td>
            <td>{{$cliente->bairro}}</td>
            <td>{{$cliente->rua}}</td>
            <td>{{$cliente->cpf}}</td>
        </tr>    
        @endforeach
    </table>
        </div>
    </div>   
</div>
</body>