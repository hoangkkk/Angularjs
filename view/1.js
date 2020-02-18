var app =angular.module('myApp', []);
angular.module('myApp', []).controller('myController', function($scope, $http) {
   // $scope.names = [
       // {name:'Jani',country:'Norway'},
       // {name:'Carl',country:'Sweden'},
       // {name:'Margareth',country:'England'},
       // {name:'Hege',country:'Norway'},
        //{name:'Joe',country:'Denmark'},
       // {name:'Gustav',country:'Sweden'},
       // {name:'Birgit',country:'Denmark'},
       // {name:'Mary',country:'England'},
        //{name:'Kai',country:'Norway'}
      //  ];
      $http.get("http://localhost:8080/angularjs/controller/layDuLieu.php")
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
    	$http.post('http://localhost:8080/angularjs/controller/luuDuLieu.php', data, config).then(function(res){
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
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieu.php', data, config).then(function(res){
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
      $http.post('http://localhost:8080/angularjs/controller/luuDuLieu.php', data, config).then(function(res){
        console.log(res.data);
      }, function(res){
        console.log(res.data);
      });
    }
  });
});

