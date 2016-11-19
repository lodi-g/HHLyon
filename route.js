/**
 * Created by Massil on 19/11/2016.
 */
app.config(function($routeProvider){
    $routeProvider
        .when("/" , {templateUrl: "Connexion/Connexion.php"})
        .when("/questionnaire" , {templateUrl: "QuestionnaireMedical/Questionnaire.php"})
        .otherwise({redirect : "/"});
});