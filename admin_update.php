<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/check_admin.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/header.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/partials/footer.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/admin_view.inc.php';


check_session();
check_admin();


$loadedUserData = $_SESSION['loaded_user_data'] ?? [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FD.cz</title>
    <link rel="icon" type="image/x-icon" href="./img/logo/csfd.png">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light bg-gradient">
    <main class="container my-5">
        <h2>Uprava uživatele - <?= $loadedUserData['username'] ?? '' ?></h2>
        <h7 class="m-3">ID: <?= $loadedUserData['id'] ?? '' ?></h7>
        <form action="includes/admin_update_action.inc.php" method="post">
            <input type="hidden" name="user_id" value="<?= $loadedUserData['id'] ?? '' ?>">
            <div class="form-group m-3">
                <label class="form-label">Uživatelské jméno</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Zadejte uživatelské jméno" value="<?= $loadedUserData['username'] ?? '' ?>">
            </div>
            <div class="form-group m-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Zadejte email" value="<?= $loadedUserData['email'] ?? '' ?>">
            </div>
            <div class="form-group m-3">
                <label class="form-label">Role</label>
                <select class="form-select" id="role" name="role">
                    <option value="user" <?= ($loadedUserData['role'] ?? '') === 'user' ? 'selected' : '' ?>>User</option>
                    <option value="admin" <?= ($loadedUserData['role'] ?? '') === 'admin' ? 'selected' : '' ?>>Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary m-3">Upravit</button>
            <a href="admin.php" class="btn btn-danger">Zpět</a>
        </form>
    </main>
</body>

</html>
