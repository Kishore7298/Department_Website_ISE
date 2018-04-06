var myapp = angular.module('myapp',[]);

myapp.controller('mycontroller', function mycontroller($scope, $http){
    $http.get('EventsList/EventsData.json').then(function(response) { $scope.artists= response.data;
                                                       });
});