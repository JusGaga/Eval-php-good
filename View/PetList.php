<?php require_once "head.php";
echo "<div class='d-flex'>";
require_once "sidebar.php";?>

<?php //var_dump($pets) ?>

<div class="d-flex flex-column align-items-center w-100">
<?php foreach ($pets as $key => $value) :?>

    <div class="card m-3 w-75">
        <div class="row g-0">
            <div class="col-md-4 mt-2">
                <img src="<?= $value['photo'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $value["anom"] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $value["date_naissance"] ?></small></p>
                    <p class="card-text"><?= $value["description"] ?></p>
                    <p class="card-text"><small class="text-muted"><?php if($value["est_adopter"] === "0"){
                        echo "N'as pas encore trouvé de famille";
                    }else if ($value["est_adopter"]=== "1"){
                        echo "En attente de validation";
                    }else{
                        echo "A trouver une famille";
                    } ?></small></p>
                </div>
                <div class="d-flex w-100 justify-content-end mb-2">
                    <a href="../Controller/AdminController.php?Edit&id=<?= $value['aid_pet'] ?>" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>


<?php endforeach; ?>
</div>
<?php require_once "footer.php" ?>
