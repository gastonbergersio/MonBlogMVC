<?php $titre = 'Mon Blog' ?>

<?php ob_start() ?>
<?php

    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
                $requeteBillets = "SELECT * FROM t_billet";  // TODO
                $billets = $bdd->query($requeteBillets) ?>

<?php foreach ($billets as $billet): ?>
    <article>
            <h1 class="titreBillet"><?= $billet['BIL_TITRE'] ?></h1>
            <time><?= $billet['BIL_DATE'] ?></time>
            <p><?= $billet['BIL_CONTENU'] ?></p>
              <p><******************* ?></p>
        <!-- TODO Bonus : affichage du nombre de commentaires -->
    </article>
    <hr />
<?php endforeach; ?>
<?php echo  $billets->rowCount(); ?>  
<?php $contenu = ob_get_clean() ?>

<?php include 'gabarit.php' ?>
