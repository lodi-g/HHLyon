/**
 * Created by Massil on 19/11/2016.
 */
app.config(function($routeProvider){
    $routeProvider
        .when("/",{templateUrl: "QuestionnaireMedical/QuestionnaireMedical.html" })
        .otherwise({redirectTo : "/"});
});
