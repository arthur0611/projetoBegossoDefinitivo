<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionario</title>

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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<br>
<center><h1>Editar Funcionarios</h1></center>
<br>


<div class="container">
  <div class="row">
    <div class="col-sm-12">
<form>

<div class="row">
  <div class="col-sm-6 mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="col-sm-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Idade</label>
    <input type="number" class="form-control" id="exampleInputPassword1">
  </div>
</div>

<div class="row">
  <div class="col-sm-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-sm-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
</div>

<div class="row">
  <div class="col-sm-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Rua</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-sm-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">CPF</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
</div>

<div class="row">
  <div class="col-sm-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Bairro</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-sm-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">estado</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
</div>

<div class="row">
  <div class="col-sm-4 mb-3">
    <label for="exampleInputPassword1" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-sm-4 mb-3">
    <label for="exampleInputPassword1" class="form-label">Salario</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-sm-4 mb-3">
    <label for="exampleInputPassword1" class="form-label">Data De Admissão</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
   </div>
  </div>
    
</body>
</html>