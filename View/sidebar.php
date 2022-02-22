<div class=" d-flex flex-column vh-100 flex-shrink-0 p-3 text-dark bg-light" style="width: 250px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="../public/img/logo.png" alt=""> </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="../Controller/NavigationController.php?admin" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Home</span> </a> </li>

        <li class="nav-item dropdown dropend ">
            <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-users"></i><span class="ms-2">Utilisateurs</span>
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a href="../Controller/AdminController.php?UserList" class="dropdown-item"><i class="fa-solid fa-screwdriver-wrench"></i> Liste Utilisateurs</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown dropend ">
            <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-cart-shopping"></i><span class="ms-2">Boutique</span>
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a href="../Controller/AdminController.php?shop" class="dropdown-item"><i class="fa-solid fa-screwdriver-wrench"></i> Liste des Articles</a></li>
                <hr>
                <li><a href="../Controller/AdminController.php?AddArticle" class="dropdown-item"><i class="fa-solid fa-plus"></i> Creation d'articles</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown dropend ">
            <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-paw"></i><span class="ms-2">Animaux</span>
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a href="../Controller/AdminController.php?Pets" class="dropdown-item"><i class="fa-solid fa-paw"></i> Liste des Animaux</a></li>
                <hr>
                <li><a href="../Controller/AdminController.php?AddPets" class="dropdown-item"><i class="fa-solid fa-plus"></i> Ajouter un animal</a></li>
                <li><a href="../Controller/AdminController.php?AddEspeces" class="dropdown-item"><i class="fa-solid fa-plus"></i> Ajouter une espece</a></li>
                <li><a href="../Controller/AdminController.php?AddRaces" class="dropdown-item"><i class="fa-solid fa-plus"></i> Ajouter une race</a></li>
            </ul>
        </li>


        <li> <a href="../Controller/AdminController.php?pets" class="nav-link text-dark">  </a> </li>
    </ul>
</div>