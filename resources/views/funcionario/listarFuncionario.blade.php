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
<center><h1>Listar Funcionarios</h1></center>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <button type="button" class="btn btn-success"><a target="_blank" href='/funcionario/cadastrar'>Cadastrar Funcionario</a></button>
    <br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col-6">Nome</th>
      <th scope="col-5">Email</th>
      <th scope="col-1">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Arthur</td>
      <td>arthurpirolo01@hotmail.com</td>
      <td><div class="col-sm-12">
              <button type="button" class="btn btn-warning" ><a href='/funcionario/editar'>Editar</a></button>
              <button type="button" class="btn btn-danger">Deletar</button>
          </div></td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton@gmail.com</td>
      <td>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <button type="button" class="btn btn-warning" ><a target="_blank" href='/funcionario/editar'>Editar</a></button>
              <button type="button" class="btn btn-danger">Deletar</button>
          </div>
        </div>
      </div>
      </td>


    </tr>
  </tbody>
</table>
</div>
  </div>
</div>




    </body>    