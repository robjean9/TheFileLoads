var app = angular.module('fileloads', ['ngResource','checklist-model']);


/* com directive funciona, porém fica lançando excessão, e eu não sei o porque */			
/*app.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if(event.which === 13) {
                
                scope.$apply(function (){
                    scope.$evalAsync(attrs.ngEnter);
                });
 
                event.preventDefault();
            }
        });
    };
});*/