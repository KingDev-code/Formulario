<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body class="antialiased">
        
        
        <div class="formulario">
            <form action="/peca" method="post">
            @csrf
                <h1>Cadastra a peça que deseja vender</h1>
                <br>
                <label for="tipo">Tipo da peça:<input type="text" name="tipo" id="tipo" placeholder="Calça"></label>
                <br>
                <label for="nome">Nome da peça:<input type="text" name="nome" id="nome" placeholder="Supreme"></label>
                <br>
                <label for="valor">Valor da peça:<input type="text" name="valor" id="valor" placeholder="R$ 120,00"></label>
                <br><br>
                <input type="submit" value="Salvar" >
            </form>
        </div>
        <div class="resultado">
        @foreach($peca as $pecas)
            <div class="peca">
                <p class="tipo">{{ $pecas->tipo }}</p>
                <p class="nome">{{ $pecas->nome }}</p>
                <p class="valor">{{ $pecas->valor }}</p>
            </div>
        @endforeach
    </div>
    </body>
</html>
