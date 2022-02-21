<?php require_once "head.php";?>

<section class="flex-column d-flex align-items-center">
    <h1 class="text-center">Formulaire d'enregistrement</h1>
        <form method="post" class="col-3">
            <label for="email">Email :</label>
            <input type="email" class="form-control" name="email" id="email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" name="password" id="password" required>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
            <label for="address">Adresse :</label>
            <input type="text" name="address" id="address" class="form-control" required>
            <label for="address2">Complément d'adresse :(optional)</label>
            <input type="text" name="address2" id="address2" class="form-control" >
            <label for="postal">Code Postal :</label>
            <input type="text" name="postal" id="postal" class="form-control" >
            <label for="tel">Télephone :</label>
            <input type="text" name="tel" id="tel" class="form-control" >
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
        fetch("../Controller/UserController.php?register",
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
            }
        })

    })


</script>

<?php require_once "footer.php"; ?>
