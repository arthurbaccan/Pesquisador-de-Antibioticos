<!DOCTYPE html>
<html lang="pt-BR">
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

    <title>Tabelas</title>
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
                <a class="nav-table" href="tabela-principal.php" style="padding-left: 20px";>Filtrar Antibióticos</a>
              </li>
              <li class="nav-item">
                <a class="nav-table nav-item-active" href="#" style="padding-left: 24px";>Tabelas Personalizadas</a>
              </li>
              <li class="nav-item">
                <a class="nav-table" href="#" style="padding-left: 24px";>Gerenciar Nuvem</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!--Adicionar um conteiner responsivo que adiciona novas tabelas personalizadas em fileiras da esquerda pra direita e quebra para a próxma linha ao chegar no fim,
      Deve conter um botão de adicionar tabelar no canto superior esquerdo sempre,
      Lembrar de colocar uma excessão de java script pra evitar que seja possivel abrir mais de uma tabela personalizada ao mesmo tempo ao clicar rápido no botão,
      As tabelas personalizadas devem usar o mesmo banco de dados das tabelas convencionais-->
      <div style="display: flex; align-items: center;">
        <button id="add-table-button" class="table-add">
          +
        </button>

        <!-- Depois de cada palavra SEMPRE COLOCAR UM ESPAÇO, mesmo que a próxima palavra seja colocada na próxma linha-->
        <button class="table-open">
          aaaaaaaaaaaa 
          aaaaaaaaa 
          aaaaaaaaaaaaa 
        </button>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="tabela.js"></script>

</body>
</html>