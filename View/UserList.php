<?php require_once "head.php";
echo "<div class='d-flex'>";
require_once "sidebar.php";?>

<table class="table table-striped display">
    <thead>
    <tr>
        <th class="text-center ">Nom</th><th class="text-center">Prénom</th><th class="text-center">Email</th><th class="text-center">Telephone</th><th class="text-center">Role</th><th class="text-center">Options</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($users as $key => $user): ?>
        <tr><td class="text-center align-middle"><?=$user['nom']?></td><td class="text-center align-middle"><?=$user['prenom']?></td><td class="text-center align-middle"><?=$user['email']?></td><td class="text-center align-middle"><?=$user['telephone']?></td><td class="text-center align-middle"><?=$user['role']?></td><td class="text-center align-middle">
                <a class="btn btn-outline-warning" href="../Controller/AdminController.php?admin&EditUser&id=<?= $user['id_us']?>"><i class="fa-solid fa-pen-to-square"></i></a></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once "footer.php"; ?>