
<html data-ng-app="demoapp">
    <head>
        
    </head>
    <body  >
        <div data-ng-controller="simplecontroller">
     <input type="text" ng-model='name'/>
            {{name}}
         <ul>
             <li data-ng-repeat="name in customer|filter:name">{{name.name}}-{{name.age}}-{{name.gender}}</li>
             </ul>
            </div>
        <script src="angular.min.js"></script>
        <script>
           var demoapp=angular.module('demoapp',[]);
           var controller={};
          controller.simplecontroller=function($scope)
                                        {$scope.customer=[{name:'John', age:25, gender:'boy'},
                                        {name:'Jessie', age:30, gender:'girl'},
                                        {name:'Johanna', age:28, gender:'girl'},
                                        {name:'Joy', age:15, gender:'girl'},
                                        {name:'Mary', age:28, gender:'girl'},
                                        {name:'Peter', age:95, gender:'boy'},
                                         {name:'Sebastian', age:50, gender:'boy'},
                                        {name:'Erika', age:27, gender:'girl'},
                                        {name:'Patrick', age:40, gender:'boy'},
                                        {name:'Samantha', age:60, gender:'girl'}];
                                        }
                                        
             controller.simplecontroller1= function($scope)
             {
             $scope.custr=[{name:'John', age:25, gender:'boy'},
            {name:'Jessie', age:30, gender:'girl'},
            {name:'Johanna', age:28, gender:'girl'},
            {name:'Joy', age:15, gender:'girl'},
            {name:'Mary', age:28, gender:'girl'},
            {name:'Peter', age:95, gender:'boy'},
            {name:'Sebastian', age:50, gender:'boy'},
            {name:'Erika', age:27, gender:'girl'},
            {name:'Patrick', age:40, gender:'boy'},
            {name:'Samantha', age:60, gender:'girl'}];
             }
                                        
            dempapp.controller(controller);
            
            function simplecontroller($scope)            
            {
            $scope.customer=[{name:'John', age:25, gender:'boy'},
            {name:'Jessie', age:30, gender:'girl'},
            {name:'Johanna', age:28, gender:'girl'},
            {name:'Joy', age:15, gender:'girl'},
            {name:'Mary', age:28, gender:'girl'},
            {name:'Peter', age:95, gender:'boy'},
            {name:'Sebastian', age:50, gender:'boy'},
            {name:'Erika', age:27, gender:'girl'},
            {name:'Patrick', age:40, gender:'boy'},
            {name:'Samantha', age:60, gender:'girl'}];
            }
            
            
            function simplecontroller1($scope)            
            {
            $scope.custr=[{name:'John', age:25, gender:'boy'},
            {name:'Jessie', age:30, gender:'girl'},
            {name:'Johanna', age:28, gender:'girl'},
            {name:'Joy', age:15, gender:'girl'},
            {name:'Mary', age:28, gender:'girl'},
            {name:'Peter', age:95, gender:'boy'},
            {name:'Sebastian', age:50, gender:'boy'},
            {name:'Erika', age:27, gender:'girl'},
            {name:'Patrick', age:40, gender:'boy'},
            {name:'Samantha', age:60, gender:'girl'}];
            }
            
            
        </script>
        
        
        
    </body>
</html>
