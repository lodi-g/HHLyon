/**
 * Created by Massil on 19/11/2016.
 */
app.config(function($routeProvider){
    $routeProvider
        .when("/",{templateUrl: "Connexion/index.php" })
        .when("/accueil", {templateUrl: "Accueil/accueil.html" })
        .when("/symptomes",{templateUrl: "Accueil/symptomes.html" })
        .when("/questionnaire" , {templateUrl: "QuestionnaireMedical/QuestionnaireMedical.html"})
        .when("/verificationQuestionnaire" , {templateUrl : "QuestionnaireMedical/GestionQuestionnaire.php"})
        .when("/inscription",{templateUrl: "Inscription/Inscription.html"})
        .when("/verificationInscription",{templateUrl: "Inscription/gestionInscription.html"})
        .when("/connect" , {templateUrl : "Connexion/login.php"})
        .when("/error", {templateUrl : "Connexion/error.html"})
        .when("/validation", {templateUrl : "Inscription/validationInscription.html"})
        .otherwise({redirectTo : "/"});
});
