var app = angular.module("myApp", ["ngRoute"]);
app.controller('myController', function ($scope) {
    
})
app.config(function ($routeProvider, $locationProvider) {
    $routeProvider
     .when("/", {
        templateUrl : "view/home.php"
    })
    .when("/theloai", {
        templateUrl : "view/Loai.php",
        controller:'controller1'
    })
    .when("/truyen", {
        templateUrl : "view/truyen.php",
        controller:'controller2'
    })
   .when("/user", {
        templateUrl : "view/user.php",
        controller:'controller3'
    })
   .when("/themTL", {
        templateUrl : "view/themTL.php",
        controller:'controller4'
    })
   .when("/addUser", {
        templateUrl : "view/addUser.php",
        controller:'controller5'
    })
   .when("/addTruyen", {
        templateUrl : "view/addTruyen.php",
        controller:'controller6'
    })
   .otherwise({ redirectTo: '/' })
   $locationProvider.html5Mode(true);
});
app.controller('controller1', function ($scope, $http) {
    $http.get("http://localhost:8080/angularjs/controller/layDuLieuLoai.php")
  .then(function(res) {
    $scope.names =res.data;

      //hieertn thị
    $scope.doihienthi = function(x) {
        // body...
        x.hienthi = !x.hienthi;
    }
    //Sửa
     $scope.luudulieu = function(x) {
        // body...
        x.hienthi = !x.hienthi;
        //lấy dữ liệu về
        var data = {
            'id':x.idLoai,
            'tenLoai':x.tenLoai,
            'AnHien':x.AnHien
        };
        var config={
            header : {
                'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
            }
        };
        console.log(data);
        $http.post('http://localhost:8080/angularjs/controller/luuDuLieuLoai.php', data, config).then(function(res){
            console.log(res.data);
        }, function(res){
            console.log(res.data);
        });
    }

      //thêm dữ liệu.
       $scope.themDuLieu = function(x) {
      //lấy dữ liệu về
      var data = {
        'tenLoai':x.tenLoai,
        'AnHien':x.AnHien
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuLoai.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }

    // Xóa dữ liệu
     $scope.xoa = function(x) {
      //lấy dữ liệu về
      var data = {
        'id':x.idLoai
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuLoai.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }
});

})
app.controller('controller2', function ($scope, $http) {
    $http.get("http://localhost:8080/angularjs/controller/layDuLieuTruyen.php")
  .then(function(res) {
    $scope.names =res.data;

      //hieertn thị
    $scope.doihienthi = function(x) {
        // body...
        x.hienthi = !x.hienthi;
    }
    //Sửa
     $scope.luudulieu = function(x) {
        // body...
        x.hienthi = !x.hienthi;
        //lấy dữ liệu về
        var data = {
            'idTruyen':x.idTruyen,
            'TenTruyen':x.TenTruyen,
            'NoiDung':x.NoiDung,
            'AnHien':x.AnHien,
            'tenTacGia':x.tenTacGia
        };
        var config={
            header : {
                'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
            }
        };
        console.log(data);
        $http.post('http://localhost:8080/angularjs/controller/luuDuLieuTruyen.php', data, config).then(function(res){
            console.log(res.data);
        }, function(res){
            console.log(res.data);
        });
    }

      //thêm dữ liệu.
       $scope.themDuLieu = function(x) {
      //lấy dữ liệu về
      var data = {
        'TenTruyen':x.TenTruyen,
        'NoiDung':x.NoiDung,
        'AnHien':x.AnHien,
        'tenTacGia':x.tenTacGia
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuTruyen.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }

    // Xóa dữ liệu
     $scope.xoa = function(x) {
      //lấy dữ liệu về
      var data = {
        'idTruyen':x.idTruyen
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuTruyen.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }
});

})
app.controller('controller3', function ($scope, $http) {
    $http.get("http://localhost:8080/angularjs/controller/layDuLieuUser.php")
  .then(function(res) {
    $scope.names =res.data;

      //hieertn thị
    $scope.doihienthi = function(x) {
        // body...
        x.hienthi = !x.hienthi;
    }
    //Sửa
     $scope.luudulieu = function(x) {
        // body...
        x.hienthi = !x.hienthi;
        //lấy dữ liệu về
        var data = {
            'idUser':x.idUser,
            'name':x.name,
            'pass':x.pass,
            'email':x.email
        };
        var config={
            header : {
                'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
            }
        };
        console.log(data);
        $http.post('http://localhost:8080/angularjs/controller/luuDuLieuUser.php', data, config).then(function(res){
            console.log(res.data);
        }, function(res){
            console.log(res.data);
        });
    }

      //thêm dữ liệu.
       $scope.themDuLieu = function(x) {
      //lấy dữ liệu về
      var data = {
            'name':x.name,
            'pass':x.pass,
            'email':x.email
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuUser.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }

    // Xóa dữ liệu
     $scope.xoa = function(x) {
      //lấy dữ liệu về
      var data = {
        'idUser':x.idUser
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuUser.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }
});

})
app.controller('controller4', function ($scope, $http) {
    //thêm dữ liệu.
       $scope.themDuLieu = function(x) {
      //lấy dữ liệu về
      var data = {
        'tenLoai':x.tenLoai,
        'AnHien':x.AnHien
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuLoai.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }
})
app.controller('controller5', function ($scope,$http) {
      //thêm dữ liệu.
       $scope.themDuLieu = function(x) {
      //lấy dữ liệu về
      var data = {
            'name':x.name,
            'pass':x.pass,
            'email':x.email
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuUser.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }
})
app.controller('controller6', function ($scope, $http) {
      //thêm dữ liệu.
       $scope.themDuLieu = function(x) {
      //lấy dữ liệu về
      var data = {
        'TenTruyen':x.TenTruyen,
        'NoiDung':x.NoiDung,
        'AnHien':x.AnHien,
        'tenTacGia':x.tenTacGia
      };
      var config={
        header : {
          'Content-type':'application/x-www-form-urlencoded;charset=UTF-8'
        }
      };
      console.log(data);
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieuTruyen.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }
})
