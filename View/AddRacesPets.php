<?php require_once "head.php";
echo "<div class='d-flex'>";
require_once "sidebar.php";?>

<section class="flex-column w-100 d-flex align-items-center justify-content-center  ">
    <h1 class="text-center">Formulaire d'ajout d'un race d'une especes</h1>
    <form method="post" class="col-6">
        <label for="especes">Nom de l'especes :</label>
        <select name="especes" id="especes"  class="form-select">
            <?php foreach ($especes as $key => $value) :  ;?>
            <option value=<?= $value["id_es"] ?>><?= $value["nom"] ?></option>
            <?php endforeach; ?>

        </select>
        <label for="nom">Nom de la race :</label>
        <input type="text" class="form-control" name="nom" id="nom">
        <div class="d-flex justify-content-end">
            <button class="btn btn-secondary mt-2 ">Valider</button>
        </div>
    </form>
    <div class="alert alert-danger" style="display: none"></div>
</section>


<script>
    let form = document.querySelector("form");
    let data = {};
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        Array.from(form.elements).forEach((i) => {
            if(i.name !== "" && i.value !== ""){
                data[i.name] = i.value;
            }
        });
        console.log(data)
        fetch("../Controller/AdminController.php?AddRacesConfirm",
            {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            }).then((response) => {
            if(!response.ok){
                document.querySelector(".alert-danger").style.display = "block";
                document.querySelector(".alert-danger").textContent = "Il y a eu un soucis";
            }else{
                window.location = "/Controller/AdminController.php?pets"
            }
        })

    })


</script>

<?php require_once "footer.php"; ?>
