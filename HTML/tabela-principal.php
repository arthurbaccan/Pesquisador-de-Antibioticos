<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg cor">
          <div class="container-fluid">
            <div class="navbar-text">
              <img src="../Imagens/lupa-com-antibiotico.png" alt="Título">
              ATBSearch
            </div>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </ul>
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item-white">
                  <a class="nav-link" href="index.html">Menu</a>
                </li>
                <li class="nav-item-white">
                  <a class="nav-link" href="contato.html">Contato</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria aria-disabled="true">Tabelas</a>
                </li>
                <li class="nav-item-white">
                  <a class="nav-link" href="cadastro.html">Cadastrar</a>
                </li>
                <li class="nav-item-white">
                  <a class="nav-link" href="login.html">Login</a>
                </li>
              </ul>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!--<Itens de personalização-->
        <div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light nav-height">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-table nav-item-active" href="#" style="padding-left: 20px";>Filtrar Antibióticos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-table" href="tabela.php" style="padding-left: 24px";>Tabelas Personalizadas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-table" href="#" style="padding-left: 24px";>Gerenciar Nuvem</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>

    
      <!--Tabela principal-->
      <h1 style="text-align: center; margin-top: 8px; margin-buttom: 8px">Filtrar Antibióticos</h1>
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