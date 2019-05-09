// app.js
// create angular app
var validationApp = angular.module('validationApp', []);

// create angular controller
validationApp.controller('mainController', function($scope) {

  // function to submit the form after all validation has occurred
  $scope.submitForm = function(isValid) {

    // check to make sure the form is completely valid
    $scope.checkvalidation = function () {

      var checked = $scope.checked;

      if (checked == false || checked == undefined)

      $scope.validationmsg = true;

      else

      $scope.validationmsg = false;

  }
  };

});
