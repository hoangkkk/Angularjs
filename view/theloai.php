<!DOCTYPE html>
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<body ng-app="myApp" ng-controller="myController">

<div >
	<p style="text-align: center;">Tìm Thể Loại Truyện</p>
	<div style="text-align: center;"><input type="text" ng-Model="tukhoa"></div>
	<p style="text-align: center;">Bảng Thể Loại Truyện</p>
	<div>
		<table border="1" width="100%" align="center">
		<tr>
			<th >Tên Loại</th>
			<th >Ẩn Hiện</th>
			<th ><button>Thêm</button></th>
		</tr>
		<tbody ng-repeat="x in names | filter:tukhoa" ng-init="x.hienthi=false">
		<tr ng-show="!x.hienthi">
			<td>{{x.tenLoai}}</td>
			<td>{{x.AnHien}}</td>
			<th><button ng-click="doihienthi(x)">Sửa</button> / <button ng-click="xoa(x)">Xóa</button></th>
		</tr>
		<tr ng-show="x.hienthi">
			<input type="hidden" ng-model="x.idLoai">
			<td><input type="text" ng-model="x.tenLoai"></td>
			<td><input type="text" ng-model="x.AnHien"></td> 
			<th ><button ng-click="luudulieu(x)">Update</button></th>
		</tr>
		</tbody>
			
		</table>
</div>
</div>
<script type="text/javascript" src="1.js" ></script>

</body>
</html>