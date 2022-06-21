<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar Produto</title>

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

<!-- formulario -->
<div class="container">
<h1><center>Editar Venda</center></h1>
        <div class="row">
            <div class="col-sm-12">
    <form action="{{ route('atualizar_venda', ['id' => $venda->id]) }}" method="post">
        @csrf
        <div>
            <label for="tipojogo_id"  class="form-label">Cliente</label>
            <input type="number" class="form-control" name="Cliente_id" id="Cliente_id" value = "{{$venda->Cliente_id}}"> 
        </div>
        <div>
            <label for="tipo_plataforma_id"  class="form-label">funcionario</label>
            <input type="number" class="form-control" name="Funcionario_id" id="Funcionario_id" value = "{{$venda->Funcionario_id}}"> 
        </div>
        <div>
            <label for="descricaoproduto"  class="form-label">Produto</label>
            <input type="number" class="form-control" name="Produto_id" id="Produto_id" value = "{{$venda->Produto_id}}"> 
        </div>
        <div>
            <label for="quantidadeEstoque"  class="form-label">Data Compra</label>
            <input type="text" class="form-control" name="dataCompra" id="dataCompra" value = "{{$venda->dataCompra}}"> 
        </div>
        <div>
            <label for="valorCompra"  class="form-label">Quantidade Compra</label>
            <input type="text" class="form-control" name="quantidadeCompra" id="quantidadeCompra" value = "{{$venda->quantidadeCompra}}"> 
        </div>
        <div>
            <label for="valorVenda"  class="form-label">Total Venda</label>
            <input type="text" class="form-control" name="TotalVenda" id="TotalVenda" value = "{{$venda->TotalVenda}}"> 

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>
</div>
    
</body>
</html>