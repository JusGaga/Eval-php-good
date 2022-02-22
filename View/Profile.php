<?php require_once "head.php"; ?>

<h1 class="text-center my-2">Votre profil:</h1>

<div class="d-flex justify-content-center" style="height: 600px;">
    <div class="col-3 border-end border-2 h-100">
        <div class="d-flex justify-content-center">
            <a href="../Controller/UserController.php?edit" class="btn btn-secondary"><i class="fa-solid fa-user-pen"></i> Editer votre profil</a>
        </div>
        <div class="mt-5 d-flex flex-column justify-content-between h-75">
            <p class="mx-3">Nom : <?= $profileUser['nom']?></p>
            <p class="mx-3">Prénom : <?= $profileUser['prenom']?></p>
            <p class="mx-3">Email : <?= $profileUser['email']?></p>
            <p class="mx-3">Adresse : <?= $profileUser['adresse']." ".$profileUser["adresse2"]?></p>
            <p class="mx-3">Code Postal : <?= $profileUser['code_postal']?></p>
            <p class="mx-3">Tel : <?= $profileUser['telephone']?></p>
            <p class="mx-3">Role : <?= $profileUser['role']?></p>
        </div>
    </div>
    <div class="col-8 px-2">
        <div class="h-50">
            <h5>Vos différentes adoptions :</h5>
            <div id="adoptions">

            </div>
        </div>
        <div class="h-50">
            <h5>Vos différents achats :</h5>
            <div id="achats">

            </div>
        </div>
    </div>
</div>


<scrip>

</scrip>

<?php require_once "footer.php";?>
