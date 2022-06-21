<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        
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
          <a class="nav-link" href="/tipoJogo/listar">Listar Tipo Jogos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tipoPlataforma/listar">Listar Plataformas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/funcionario/listar">Listar Funcionario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cliente/listar">Listar Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fornecedor/listar">Listar Fornecedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produto/listar">Listar Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/venda/listar">Listar Venda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/compraFornecedores/listar">Listar Compra de Fornecedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagamentoCliente/listar">Listar Pagamento de Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagamentoFornecedores/listar">Listar Pagamento de Fornecedores</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!--corpo da implementação-->
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Gta 5</h5>
    <p class="card-text">Preço: R$150 <br>
      Tipo Jogo:Mundo Livre<br>
      Tipo Plataforma:Xbox One<br>
    </p>
    <a href="#" class="btn btn-primary">Ver Produto</a>
  </div>
</div>
        </div>

        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">The Sims 4</h5>
    <p class="card-text">Preço: R$150 <br>
      Tipo Jogo: Mundo Livre<br>
      Tipo Plataforma: PC<br></p>
    <a href="#" class="btn btn-primary">Ver Produto</a>
  </div>
</div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
             <h5 class="card-title">Battlefield 3</h5>
             <p class="card-text">Preço: R$150 <br>
              Tipo Jogo:Mundo Livre<br>
              Tipo Plataforma:Xbox One<br></p>
             <a href="#" class="btn btn-primary">Ver Produto</a>
            </div>
        </div>

        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Xbox one</h5>
    <p class="card-text">Preço: R$150 <br>
      Tipo Jogo:Mundo Livre<br>
      Tipo Plataforma:Xbox One<br></p>
    <a href="#" class="btn btn-primary">Ver Produto</a>
  </div>
</div>
        </div>

        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Playstation 4</h5>
    <p class="card-text">
      Preço: R$150 <br>
      Tipo Jogo:Mundo Livre<br>
      Tipo Plataforma:Xbox One<br>
    </p>
    <a href="#" class="btn btn-primary">Ver Produto</a>
  </div>
</div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
             <h5 class="card-title">Xbox 360</h5>
             <p class="card-text">
              Preço: R$150 <br>
              Tipo Jogo: Mundo Livre<br>
              Tipo Plataforma: Xbox One<br></p>
             <a href="#" class="btn btn-primary">Ver Produto</a>
            </div>
        </div>

        </div>
    </div>
</div>


    </body>
</html>
