
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<tbody ng-controller="controller2">

<div >
	<p style="text-align:; font-weight: bold;">Tìm User:</p>
	<div style="text-align:;"><input type="text" ng-Model="tukhoa"></div>
	<p style="text-align: center; font-weight: bold;">Bảng Thể Loại Truyện</p>
	<div>
		<table border="1" width="100%" cellspacing="0">
		<tr bgcolor="#0FF">
			<th >UserName</th>
			<th >Password</th>
			<th>Email</th>
			<th width="200" ><div class="menu"><a href="addUser"><font color="red">Thêm</font></a></div></th>
		</tr>
		<tbody ng-repeat="x in names | filter:tukhoa" ng-init="x.hienthi=false">
		<tr ng-show="!x.hienthi">
			<td><div align="center">{{x.name}}</div></td>
			<td><div align="center">{{x.pass}}</div></td>
			<td><div align="center">{{x.email}}</div></td>
			<th width="200"><button onclick="return confirm('bạn có chắc chắn muốn sửa không?')" ng-click="doihienthi(x)">Sửa</button>  <form action="index.php"><button onclick="return confirm('bạn có chắc chắn muốn xóa không?')" ng-click="xoa(x)">Xóa</button></form> </th>
		</tr>
		<tr ng-show="x.hienthi">
			<input type="hidden" ng-model="x.idUser">
			<td><input type="text" ng-model="x.name"></td>
			<td><input type="text" ng-model="x.pass"></td> 
			<td><input type="text" ng-model="x.email"></td>
			<th width="200" ><button ng-click="luudulieu(x)">Update</button></th>
		</tr>
		</tbody>
			
		</table>
</div>
</div>
<script type="text/javascript" src="../route.js" ></script>

</tbody>