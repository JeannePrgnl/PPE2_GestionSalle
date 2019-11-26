
<h1 class="titre-centre">Liste des salles</h1>

<?php
for ($i = 0; $i < count($listeSalles); $i++) {

    ?>
    <div class="card">

        <div class="descrCard"><?php echo "<a href='./?action=detail&nSalle=" . $listeSalles[$i]['nSalle'] . "'>" .  $listeSalles[$i] ['nomSalle'] . "</a>"; ?>
            <p> N° de la salle: <?= $listeSalles[$i]["nSalle"] ?>
            -  Nombre de postes: <?= $listeSalles[$i]["nbPoste"] ?>
            -  Adresse IP: <?= $listeSalles[$i]["indIP"] ?> </p>
        </div>
    </div>
<?php } ?>