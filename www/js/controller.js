var app = angular.module('app', ['ngResource']);

app.controller('MainCtrl', function($scope, $resource, $window) {
  var Project = $resource('../www/api.php', {id: '@id'});
  $scope.projects = Project.query();

});