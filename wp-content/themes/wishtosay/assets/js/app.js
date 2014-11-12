(function() {
  var app = angular.module('archiveCards', ['ngRoute', 'ngResource']);

  // set up configuration variables
  /*
  app.run(['$rootScope', function($rootScope){
    $rootScope.api = ;
    $rootScope.nonce = WPAPI.api_nonce;
    $rootScope.dir = WPAPI.template_url;
  }]);
  */
  // example controller
  app.controller('cardsController', ['$scope', '$http', function($scope, $http){
    $http.get(
      'http://oringapi.cauley.co/cards'
    ).success(function(data, status, headers, config){
      console.log(data);
      $scope.cards = data;
      console.log('success');
    }).error(function(data, status, headers, config){
      console.log('error');
    });
  }]);
})();