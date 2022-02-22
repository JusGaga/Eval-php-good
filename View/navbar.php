<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="../public/img/logo.png" alt="logo" width="100%"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-paw"></i> Adopter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-basket-shopping"></i> Boutique</a>
        </li>
      </ul>
      <ul class="d-flex navbar-nav">

          <div>
              <?php if(!isset($_SESSION['user'])) : ?>
                  <a class="btn btn-primary" href="../Controller/NavigationController.php?login">Se Connecter</a>
                  <a class="btn btn-success" href="../Controller/NavigationController.php?register">S'inscrire</a>
              <?php endif; ?>
              <?php if (isset($_SESSION['user'])) : ?>
                  <li class="nav-item dropdown dropstart ">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-bars"></i>
                      </a>
                      <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                          <li>
                              <?php if($_SESSION["user"]["role"] === "admin") :?>
                                  <a href="../Controller/NavigationController.php?admin" class="dropdown-item"><i class="fa-solid fa-screwdriver-wrench"></i> Panel admin</a>
                              <?php endif; ?>
                          </li>
                          <li><a href="../Controller/UserController.php?user" class="dropdown-item"><i class="fa-solid fa-user"></i> Profile</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li> <a class="dropdown-item" href="../Controller/UserController.php?disconnect"><i class="fa-solid fa-power-off"></i> Déconnexion</a></li>
                      </ul>
                  </li>


              <?php endif; ?>
          </div>
      </ul>
    </div>
  </div>
</nav>