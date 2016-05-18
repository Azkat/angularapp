var app = angular.module('app', ['ngResource']);

app.controller('MainCtrl', function($scope, $resource, $window, $location) {
  var location = $location;
  console.log(location);
  var Project = $resource('./api.php:id', {id: '@id'});
  $scope.projects = Project.query();

});