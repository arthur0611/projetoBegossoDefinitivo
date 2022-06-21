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


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NightFallBR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cliente">Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/funcionario">Funcionario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tipoJogo/listar">listar tipo Jogos</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<br>
<br>

<!-- lista -->
    <div class="container">
    <h1><center>Listar Compra Fornecedores</center></h1>
        <div class="row">
            <div class="col-sm-12">
    <table class="table table-striped">
        <tr>
            <th>Fornecedor</th>
            <th>Produto</th>
            <th>Data Compra</th>
            <th>Total Comprado</th>
            <th>Valor Total</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>

        @foreach($compraFornecedor as $compraFornecedor)
        <tr>
            <td>{{$compraFornecedor->Fornecedor_id}}</td>
            <td>{{$compraFornecedor->Produto_id}}</td>
            <td>{{$compraFornecedor->dataCompra}}</td>
            <td>{{$compraFornecedor->totalComprado}}</td>
            <td>{{$compraFornecedor->valorTotalCFornecedores}}</td>
        
            <td><a href="{{ route('editar_compraFornecedores',['id' => $compraFornecedor->id] )}}"> Editar</a></td>
            <td><a href="{{ route('excluir_compraFornecedores',['id' => $compraFornecedor->id] )}}" >Excluir</a></td> 
        </tr>    
        @endforeach
    </table>
    <a href="/compraFornecedores/novo"><button class="btn btn-success">Cadastrar novo fornecedor</button></a>
    <a href="/compraFornecedores/relatorio"><button class="btn btn-primary">Relatorio Compra Fornecedor</button></a>
  </div>
    </div>   
</div>
    
</body>
</html>