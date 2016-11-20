/**
 * Created by Massil on 19/11/2016.
 */
app.config(function($routeProvider){
    $routeProvider
        .when("/",{templateUrl: "Connexion/index.html" })
        .when("/symptomes",{templateUrl: "Accueil/symptomes.html" })
        .when("/questionnaire" , {templateUrl: "QuestionnaireMedical/QuestionnaireMedical.html"})
        .when("/verificationQuestionnaire" , {templateUrl : "QuestionnaireMedical/GestionQuestionnaire.php"})
        .otherwise({redirectTo : "/"})
        .when("/inscription",{templateUrl: "Inscription/Inscription.html" });
});
