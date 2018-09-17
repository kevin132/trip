<?php
session_start();
require_once 'common.php';
$db=dbConnect();

if(isset($_GET['logout']) && isset($_SESSION['user'])){
    unset($_SESSION["user"]);
    unset($_SESSION["is_admin"]);
    unset($_SESSION["user_id"]);
}
if (isset($_POST['register'])) {
    require_once('controllers/create_account.php');
}
if (isset($_POST['login'])) {
    require_once('controllers/create_account.php');
}
require_once 'views/partials/head_asset.php';
require_once 'views/nav.php';

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'article') {

        require('controllers/article.php');

    }elseif ($_GET['page'] == 'account') {

        require('controllers/create_account.php');

    }elseif ($_GET['page'] == 'admin') {

        require('controllers/admin/index.php');

    }else {
        require('controllers/home.php');
    }
}else {
    require('controllers/home.php');
}

require_once 'views/partials/footer.php';

?>