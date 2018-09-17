<?php require_once('../common.php');


?>

<?php require_once ('../views/partials/head_asset.php')?>

<?php
$query = $db->query('SELECT * FROM category');
$categories = $query->fetchall();
?>

<main class="categoryPage d-flex align-items-center justify-content-center flex-column  w-100">


    <h2 class="pb-4 pt-4">Administration : liste des voyages</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>numéro</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>

        <?php if($categories): ?>
            <?php foreach($categories as $c): ?>

                <tr>
                    <!-- htmlentities sert à écrire les balises html sans les interpréter -->
                    <th><?php echo htmlentities($c['id']); ?></th>
                    <td><?php echo htmlentities($c['name']); ?></td>

                    <td>
                        <a onclick="return confirm('Are you sure?')" href="category-list.php?category_id=<?php echo $category['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            Aucune catégorie enregistré.
        <?php endif; ?>


        </tbody>

    </table>
    <a class="btn btn-success" href="category-form.php">Ajouter une catégorie</a>

</main>
</body>
</html>