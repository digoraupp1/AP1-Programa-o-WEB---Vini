<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <header class="p-5 bg-secondary text-white">
        <h1>Minha Area Administrativa</h1>
        <p>Exemplo de estrutura admin...</p>
        <a href="index.php?controller=main&action=logout">Deslogar</a>
    </header>
    <section class="row">
        <nav class="col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a id="home" class="nav-link" href="?controller=main&action=home">Home</a>
                </li>
            </ul>
            <h3>Clientes</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a id="clients" class="nav-link" href="?controller=clients&action=listClients">Lista Clientes</a>
                </li>
            </ul>

        </nav>
        <article class="col-md-9">