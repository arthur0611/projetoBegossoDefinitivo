<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar novo tipo de jogo</title>
</head>
<body>
    <form action="{{ route('salvar_tipoJogo') }}" method="post">
        @csrf
        <div><label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao"> 
        </div>

        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>