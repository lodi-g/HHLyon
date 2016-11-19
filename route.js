/**
 * Created by Massil on 19/11/2016.
 */
app.config(function($routeProvider){
    $routeProvider
        .when("/",{templateUrl: "Accueil/accueil.html" })
        .when("/questionnaire" , {templateUrl: "QuestionnaireMedical/QuestionnaireMedical.html"})
        .otherwise({redirectTo : "/"});
});
