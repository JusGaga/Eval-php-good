<?php require_once "head.php";
echo "<div class='d-flex'>";
require_once "sidebar.php";?>

<section class="flex-column d-flex align-items-center">
    <h1 class="text-center">Mise à jour de vos informations</h1>
    <form method="post" class="col-6">
        <label for="email">Email :</label>
        <input type="email" class="form-control" name="email" id="email" value=<?= $user["email"] ?> disabled >
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control " value=<?= $user["nom"] ?>  >
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" class="form-control " value=<?= $user["prenom"] ?>  >
        <label for="telephone">Télephone :</label>
        <input type="text" name="tel" id="telephone" class="form-control " value=<?= $user["telephone"] ?> disabled >
        <label for="role">Role :</label>
        <select name="role" id="role" class="form-select">
            <option value="admin">Admin</option>
            <option value="user">User</option>
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
        fetch("../Controller/AdminController.php?Update&id=<?=$user['id_us']?>",
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
                window.location = "/Controller/AdminController.php?UserList&admin"
            }
        })

    })
</script>

<?php require_once "footer.php"; ?>
