// app.js
// create angular app
var validationApp = angular.module('validationApp', []);

// create angular controller
validationApp.controller('mainController', function($scope) {
  $scope.password = {
    password_reg: "",
    password2_reg: ""
  };

  // (?=(.*\d){2}) --> atleast 1 digits
  // (?=(.*[a-z]){2}) --> atleast 1 lower case chars
  // (?=(.*[A-Z]){2}) --> atleast 1 lower case chars
  // (?=(.*[!@#$%]){2}) --> atleast 1 special chars, can be any one of !, @, #, $, %

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
