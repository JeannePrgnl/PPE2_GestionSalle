<h1 class="titre-centre">Détail de la salle</h1>
<?php  
    for ($i = 0; $i < count($uneSalle); $i++) { ?>
    <div class="card">   
        <h2>  <?= $uneSalle[$i]["nPoste"]?> </h2>
        <div class="descrCard">
            <p> Nom du poste: <?= $uneSalle[$i]["nomPoste"]?>
                -  Adresse IP: <?= $uneSalle[$i]["indIP"] ?>
                -  Administrateur: <?= $uneSalle[$i]["ad"] ?> </p>
        </div>
    </div>
<?php } ?>