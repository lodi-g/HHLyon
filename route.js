/**
 * Created by Massil on 19/11/2016.
 */
app.config(function($routeProvider){
    $routeProvider
        .when("/",{templateUrl: "Inscription/Inscription.html" })
        .when("/accueil", {templateUrl: "Accueil/accueil.html" })
        .when("/symptomes",{templateUrl: "Accueil/symptomes.html" })
        .when("/connexion_utilisateur", {templateUrl: "Connexion/index.php"})
        .when("/questionnaire" , {templateUrl: "QuestionnaireMedical/QuestionnaireMedical.html"})
        .when("/verificationQuestionnaire/:id" , {templateUrl : "QuestionnaireMedical/GestionQuestionnaire.php"})
        .when("/inscription",{templateUrl: "Inscription/Inscription.html"})
        .when("/verificationInscription",{templateUrl: "Inscription/gestionInscription.html"})
        .when("/error", {templateUrl : "Connexion/error.html"})
        .when("/admin" , {templateUrl: "Administration/listePatients.php"})
        .otherwise({redirectTo : "/"});
});
