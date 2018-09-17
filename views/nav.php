<div class="d-flex justify-content-between">
    <div class="topnav" id="myTopnav">
        <a href="#home"  style="color:#fff" class="active">Voyage voyage</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <?php if (isset($_SESSION['user'])): ?>
        <div class="dropdown show navDropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <h2 class="text-center">  <?php echo $_SESSION['user']; ?></h2>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php if ($_SESSION['is_admin'] == 1): ?>
                    <a class="d-block btn btn-warning mb-4 mt-2" href="index.php?page=admin">Administration</a>
                <?php endif; ?>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="index.php?logout">Déconnexion</a>
            </div>
        </div>
    <?php else: ?>
        <div class="topnav">
            <a href="index.php?page=account" class="nav-button">Compte et réservations</a>
        </div>

    <?php endif; ?>
</div>