angular.module("myApp").controller("DashboardCtrl",function($scope, $http){


    $scope.dados = new Array();
    $scope.usuarios = new Array();
    $scope.acessos = new Array();

    $http.get('server/getTypeAcess.php').then(function(request) {
        $scope.acessos = request.data;
    },null);

    UpdateListUsers();

    $scope.Register = function(){
        console.log($scope.dados.usuario);
        $http.post('server/RegisterUser.php',$scope.dados.usuario,null).then(function(request) {
            UpdateListUsers();
        },null);
    }


    function UpdateListUsers() {
        $http.get('server/GetUsers.php').then(function(request) {
            $scope.usuarios = request.data;
        },null);
    }
});

