<?php
    include_once ("../Connexion/context.php");

    $context = new context();
    $context->try_connect();
?>
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
    <thead>
    <tr>
        <th class="mdl-data-table__cell--non-numeric">Material</th>
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
            "SELECT * 
            FROM users u INNER JOIN patient p 
                on u.id = p.id_user");
        foreach ($listePatients as $patient)
        {
            echo "<tr>
                <td class=\"mdl-data-table__cell--non-numeric\">$patient</td>
                <td class=\"mdl - data - table__cell--non - numeric\">$patient->Prenom</td>
                <td></td>
                <td>$2.90</td>
            </tr>";
        }
    ?>

<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
    <thead>
    <tr>
        <th class="mdl-data-table__cell--non-numeric">Material</th>
        <th>Quantity</th>
        <th>Unit price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
        <td>250</td>
        <td>$2.90</td>
    </tr>
    <tr>
        <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
        <td>50</td>
        <td>$1.25</td>
    </tr>
    <tr>
        <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
        <td>10</td>
        <td>$12.35</td>
    </tr>
    </tbody>
</table>