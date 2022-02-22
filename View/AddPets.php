<?php require_once "head.php";
echo "<div class='d-flex'>";
require_once "sidebar.php";?>

<section class="flex-column w-100 d-flex align-items-center justify-content-center">
    <h1 class="text-center">Formulaire d'enregistrement</h1>
    <form method="post" class="col-6">
        <label for="nom">Nom de l'animal :</label>
        <input type="text" name="nom" id="nom" class="form-control">
        <label for="date_naissance">Date de naissance de l'animal :</label>
        <input type="date" name="date_naissance" id="date_naissance" class="form-control" >
        <label for="photo">Url de la photo de l'animal :</label>
        <input type="text" name="photo" id="photo" class="form-control" >
        <label for="description">Description de l'animal:</label>
        <textarea name="description" id="description" class="form-control" ></textarea>
        <label for="id_es">Especes de l'animal :</label>
        <select name="id_es" id="id_es" class="form-select">
            <?php foreach ($especes as $key => $value): ?>
                <option value=<?= $value["id_es"]?>> <?= $value["nom"] ?></option>
            <?php endforeach;?>
        </select>
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
        fetch("../Controller/AdminController?AddPetsConfirm",
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
                // window.location = "/"
            }
        })

    })


</script>

<?php require_once "footer.php"; ?>
