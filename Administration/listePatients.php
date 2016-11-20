<?php
    include_once ("../Connexion/context.php");

    $context = new context();
    $context->try_connect();
?>
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
    <thead>
    <tr>
        <th >Material</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Telephone</th>
        <th>Date de naissance</th>
        <th>Sexe</th>
        <th>Personne de confiance</th>
        <th>Telephone personne de confiance</th>
        <th>Code connexion</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $listePatients = $context->bdd->query(
            "SELECT 
              DISTINCT(id_user)
              , nom 
              , prenom 
              , telephone 
              , date_naissance 
              , sexe 
              , nom_personne_confiance 
              , tel_personne_confiance 
              , prenom_personne_confiance 
              , tel_personne_confiance 
            FROM users u INNER JOIN patient p 
                on u.id = p.id_user");
        foreach ($listePatients as $patient)
        {
            echo "<tr>
                <td>".$patient["nom"]."</td>
                <td>".$patient["prenom"]."</td>
                <td>".$patient["telephone"]."</td>
                <td>".$patient["date_naissance"]."</td>
                <td>".$patient["sexe"]."</td>
                <td>".$patient["nom_personne_confiance"]." ".$patient["prenom_personne_confiance"]."</td>
                <td>".$patient["tel_personne_confiance"]."</td>
                <td>".$patient["token"]."</td>
            </tr>";
        }
    ?>
    </tbody>
</table>