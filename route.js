/**
 * Created by Massil on 19/11/2016.
 */
app.config(function($routeProvider){
    $routeProvider
        .when("/",{templateUrl: "Connexion/index.html" })
        .when("/accueil", {templateUrl: "Accueil/accueil.php" })
        .when("/symptomes",{templateUrl: "Accueil/symptomes.html" })
        .when("/questionnaire" , {templateUrl: "QuestionnaireMedical/QuestionnaireMedical.html"})
        .when("/verificationQuestionnaire" , {templateUrl : "QuestionnaireMedical/GestionQuestionnaire.php"})
        .when("/inscription",{templateUrl: "Inscription/Inscription.html"})
        .when("/connect" , {templateUrl : "Connexion/login.php"})
        .when("/error", {templateUrl : "Connexion/error.html"})
        .otherwise({redirectTo : "/"});
});
