<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar novo tipo de jogo</title>

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
        <div class="row">
            <div class="col-sm-12">
    <form action="{{ route('salvar_funcionario') }}" method="post">
        @csrf
        <div>
            <label for="nome"  class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome"> 
        </div>
        <div>
            <label for="idade"  class="form-label">Idade</label>
            <input type="text" class="form-control" name="idade" id="idade"> 
        </div>
        <div>
            <label for="email"  class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email"> 
        </div>
        <div>
            <label for="cidade"  class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade"> 
        </div>
        <div>
            <label for="rua"  class="form-label">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua"> 
        </div>
        <div>
            <label for="cpf"  class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf"> 
        </div>
        <div>
            <label for="bairro"  class="form-label">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro"> 
        </div>
        <div>
            <label for="estado"  class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado"> 
        </div>
        <div>
            <label for="complemento"  class="form-label">Complemento</label>
            <input type="text" class="form-control" name="complemento" id="complemeto"> 
        </div>
        <div>
            <label for="salario"  class="form-label">Salario</label>
            <input type="text" class="form-control" name="salario" id="salario"> 
        </div>
        <div>
            <label for="dataAdmissao"  class="form-label">Data Admissão</label>
            <input type="text" class="form-control" name="dataAdmissao" id="dataAdmissao"> 
        </div>
        
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>
</div>
    
</body>
</html>