<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="position.css">
    <link rel="stylesheet" href="defModel.css">

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../Imagens/lupa-com-antibiotico.png" type="image/x-icon">

    <link rel="stylesheet" href="modBootstrap.css">

    <title>Document</title>
</head>

<style>
    body {
      overflow-x: hidden;
      background-color: #dfdfdfee;
    }
  </style>

<body>
    <!--Navbar-->
    <div class="navbar">
        <div class="nav-left">
            <img src="../Imagens/lupa-com-antibiotico.png">
            ATBSearch
        </div>

        <div class="nav-right">
            <a href="index.html">Menu</a>
            <a href="contato.html">Contato</a>
            <a href="tabela-principal.php">Tabelas</a>
            <a href="cadastro.html">Cadastrar</a>
            <a href="login.html">Login</a>
        </div>
    </div>

    <!--<Itens de personalização-->
    <div class="navbar-table">
        <a href="#" class="nav-table-active">Filtrar Antibióticos</a>
        <a href="tabela.php" class="nav-table-no-active">Tabelas Personalizadas</a>
        <a href="#" class="nav-table-no-active">Gerenciar Nuvem</a>
    </div>
    <br>
    <!--Tabela principal-->
    <h1 style="text-align: center; margin-top: 90px; margin-buttom: 8px">Filtrar Antibióticos</h1>
    <table class="table-default">
      <tr>
        <th>Nome</th>
        <th>Tipo de antibiótico</th>
        <th>Ataca gram positiva</th>
        <th>Ataca gram negativa</th>
        <th>Morfologia</th>
      </tr>
                
      <?php include 'tabelas.php'; ?>
        
    </table>
      
</body>
</html>