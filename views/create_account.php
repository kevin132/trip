<?php
if (isset($_POST['register'])) {
    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($_POST['email']));
    $userAlreadyExists = $query->fetch();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];
    if (empty($name) OR empty($password) OR empty($email)) {
        $registerEmpty = "Merci de remplir tous les champs";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $registerMessage = "Adresse email non valide";
    } elseif ($userAlreadyExists) {
        $registerMessage = "Adresse email déjà enregistrée";
    } elseif ($password != $passwordConfirm) {
        $passwordMessage = "Les mots de passe ne sont pas identiques";
        /*
    } elseif (strlen($password) < 8 && !preg_match('#^(?=.*[a-z])(?=.*[0-9])#', $password)) {
        $passwordMessage = "Le mot de passe doit contenir au moins 8 caractères.";
        */
    } else {
        $query = $db->prepare('INSERT INTO user (name,email,password) VALUES (?, ?, ?)');
        $newUser = $query->execute(
            [
                $_POST['name'],
                $_POST['email'],
                hash('md5', $_POST['password']),
            ]
        );

        $_SESSION['is_admin'] = 0;
        $_SESSION['user'] = $_POST['name'];

    }

    if (isset($_SESSION['user'])) {
        header('location:index.php');
        exit;

    }
}
if (isset($_POST['login'])) {
    if (empty($_POST['email']) OR empty($_POST['password'])) {
        $loginMessage = "Merci de remplir tous les champs";
    } else {
        $query = $db->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
        $query->execute(array($_POST['email'], hash('md5', $_POST['password']),));
        $user = $query->fetch();
        if ($user) {
            $_SESSION['is_admin'] = $user['is_admin'];
            $_SESSION['user'] = $user['name'];
            $_SESSION['user_id'] = $user['id'];
        } else {
            $loginMessage = "Mauvais identifiants";
        }
    }
    if (isset($_SESSION['user'])) {
        header('location:index.php');
        exit;
    }
}
?>
<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">Creer un Compte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
               aria-selected="false">Connexion</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!--form for create an account-->
            <form method="post" action="index.php?page=account" class="formAccount">
                <h2 class="formAccountGroup">Creer votre espace client</h2>
                <div class="form-group formAccountGroup">
                    <label for="name">Nom</label>
                    <input type="text" name="name" autocomplete="off" class="form-control formAccountInput" id="name"
                           aria-describedby="emailHelp" placeholder="Nom" required>
                </div>
                <div class="form-group formAccountGroup">
                    <label for="email">Email</label>
                    <input type="email" name="email" autocomplete="off" class="form-control formAccountInput" id="email"
                           aria-describedby="emailHelp" placeholder="Email" required>
                    <div class="valid-feedback">
                        adresse email valide
                    </div>
                    <div class="invalid-feedback">
                        Veuillez rentrer une adresse email valide
                    </div>
                </div>
                <?php if (isset($registerEmpty)): ?>
                    <div class="text-danger"><?= $registerEmpty; ?></div>
                <?php endif; ?>
                <?php if (isset($registerMessage)): ?>
                    <div class="text-danger"><?= $registerMessage; ?></div>
                <?php endif; ?>
                <div class="form-group formAccountGroup">
                    <label for="password">Mot de Passe</label>
                    <input type="password" autocomplete="off" name="password" class="form-control formAccountInput"
                           id="password"
                           placeholder="Mot de Passe" required>
                </div>
                <div class="form-group formAccountGroup ">
                    <label for="password_confirm">Confirmation de Mot de Passe</label>
                    <input type="password" autocomplete="off" name="password_confirm"
                           class="form-control formAccountInput"
                           id="password_confirm"
                           placeholder="Mot de Passe" required>
                </div>

                <div class="form-group form-check formAccountGroup">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Voir le Mot de Passe</label>
                </div>
                <button type="submit" name="register" class="btn btn-primary formAccountGroup">Créer votre Compte
                </button>
            </form>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="index.php?page=account" method="post" class="formAccount">
                <h2 class="formAccountGroup" >Connecter à votre espace client </h2>
                <div class="form-group formAccountGroup">
                    <label for="emailLogin">Email</label>
                    <input type="email" class="form-control" name="email" id="emailLogin" aria-describedby="emailHelp" placeholder="Email">
                    <div class="invalid-feedback">
                        Veuillez rentrer une adresse email valide
                    </div>
                </div>
                <div class="form-group formAccountGroup">
                    <label for="passwordLogin">Mot de Passe</label>
                    <input type="password" class="form-control" name="password" id="passwordLogin" placeholder="Mot de Passe">
                </div>
                <div class="form-group form-check formAccountGroup">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <?php if (isset($loginMessage)): ?>
                    <div class="text-danger"><?= $loginMessage; ?></div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary formAccountGroup" name="login">Se Connecter</button>
            </form>
        </div>
    </div>


</div>