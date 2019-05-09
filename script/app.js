// Create AngularJS App
var validationApp = angular.module('validationApp', []);

// Create AngularJS Controller
validationApp.controller('mainController', function($scope) {
  $scope.password = {
    password_reg: "",
    password2_reg: ""
  };

  // Check to see if the password has an uppercase, lowercase, number and special character
  $scope.pattern = /(?=(.*\d){1})(?=(.*[a-z]){1})(?=(.*[A-Z]){1})(?=(.*[!@#$%]){1})/;

  // function to submit the form after all validation has occurred
  $scope.submitForm = function(isValid) {

    // check to make sure the checkbox is checked
    $scope.checkvalidation = function () {

      var checked = $scope.checked;

      if (checked == false || checked == undefined)

      $scope.validationmsg = true;

      else

      $scope.validationmsg = false;

    }
  };

});

//Directive that checks if the password2_reg matches password_reg
validationApp.directive('pwCheck', function () {
        return {
            require: 'ngModel',
            link: function (scope, elem, attrs, ctrl) {
                scope.$watch(attrs.pwCheck, function (password_reg) {
                    var isValid = ctrl.$viewValue === password_reg;
                    ctrl.$setValidity('pwmatch', isValid);
                });
            }
        }
    });
