<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shining House</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="sobre.php">Sobre <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviços Disponiveis 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pesquisa.php?q=domestico">Doméstico</a>
          <a class="dropdown-item" href="pesquisa.php?q=empresarial">Empresarial</a>
        </div>
        <?php
        if (empty($_COOKIE['nivel'])) {
          ?>
      <li class="nav-item">
        <a href="#" data-toggle="modal" data-target="#exampleModal" class="nav-link">Login</a>
      </li>
    <?php
    } else {
      ?>
      <li class="nav-item">
        <a href="perfil.php" class="nav-link">Perfil</a>
      </li>
      <li class="nav-item">
        <a href="sair.php" class="nav-link">Sair</a>
      </li>
    <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="pesquisa.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="q">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisa</button>
    </form>
  </div>
</nav>

<!--modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="login.php">
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
      </div>
      <div class="modal-footer">
        <a href="cadastrar.php" class="btn btn-danger">Cadastrar</a>
      </div>
    </div>
  </div>
</div>