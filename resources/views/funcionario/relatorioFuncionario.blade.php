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
<h1><center>Relatorio Funcionario</center></h1>

<br>
<br>

<!-- lista -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>idade</th>
            <th>email</th>
            <th>cidade</th>
            <th>rua</th>
            <th>cpf</th>
            <th>bairro</th>
            <th>estado</th>
            <th>complemento</th>
            <th>salario</th>
            <th>Data Admissão</th>
        </tr>

        @foreach($funcionario as $funcionario)
        <tr>
            <td>{{$funcionario->nome}}</td>
            <td>{{$funcionario->idade}}</td>
            <td>{{$funcionario->email}}</td>
            <td>{{$funcionario->cidade}}</td>
            <td>{{$funcionario->rua}}</td>
            <td>{{$funcionario->cpf}}</td>
            <td>{{$funcionario->bairro}}</td>
            <td>{{$funcionario->estado}}</td>
            <td>{{$funcionario->complemeto}}</td>
            <td>{{$funcionario->salario}}</td>
            <td>{{$funcionario->dataAdmissao}}</td>
        </tr>    
        @endforeach
    </table>
   </div>
    </div>   
</div>
    
</body>
</html>