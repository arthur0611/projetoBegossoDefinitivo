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
<h1><center>Cadastrar Produto</center></h1>
        <div class="row">
            <div class="col-sm-12">
    <form action="{{ route('salvar_produto') }}" method="post">
        @csrf
        <div>
            <label for="tipojogo_id"  class="form-label">tipojogo_id</label>
            <input type="number" class="form-control" name="tipojogo_id" id="tipojogo_id" required> 
        </div>
        <div>
            <label for="tipo_plataforma_id"  class="form-label">tipo_plataforma_id</label>
            <input type="number" class="form-control" name="tipo_plataforma_id" id="tipo_plataforma_id" required> 
        </div>
        <div>
            <label for="descricaoproduto"  class="form-label">Descri????o Produto</label>
            <input type="text" class="form-control" name="descricaoproduto" id="descricaoproduto" required> 
        </div>
        <div>
            <label for="quantidadeEstoque"  class="form-label">Quantidade Estoque</label>
            <input type="text" class="form-control" name="quantidadeEstoque" id="quantidadeEstoque" required> 
        </div>
        <div>
            <label for="valorCompra"  class="form-label">Valor Compra</label>
            <input type="text" class="form-control" name="valorCompra" id="valorCompra" required> 
        </div>
        <div>
            <label for="valorVenda"  class="form-label">Valor Venda</label>
            <input type="text" class="form-control" name="valorVenda" id="valorVenda" required> 
        </div>
        <div>
            <label for="dataLancamento"  class="form-label">Data Lan??amento</label>
            <input type="text" class="form-control" name="dataLancamento" id="dataLancamento" required> 
        </div>
        <div>
            <label for="empresa"  class="form-label">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="empresa" required> 
        </div>
        <div>
            <label for="classificacaoEtaria"  class="form-label">Classificacao Etaria</label>
            <input type="text" class="form-control" name="classificacaoEtaria" id="classificacaoEtaria" required> 
        </div>
        <div>
            <label for="classificacaoQuantidade"  class="form-label">Classificacao Quantidade</label>
            <input type="text" class="form-control" name="classificacaoQuantidade" id="classificacaoQuantidade" required> 
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>
</div>
    
</body>
</html>