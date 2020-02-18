
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<tbody ng-controller="controller2">

<div >
	<p style="text-align:; font-weight: bold;">Tìm Truyện:</p>
	<div style="text-align:;"><input type="text" ng-Model="tukhoa"></div>
	<p style="text-align: center; font-weight: bold;">Bảng Thể Loại Truyện</p>
	<div>
		<table border="1" width="100%" cellspacing="0">
		<tr bgcolor="#0FF">
			<th >Tên Truyện</th>
			<th >Nội Dung</th>
			<th>Tên Tác Giả</th>
			<th >Ẩn Hiện</th>
			<th width="200" ><div class="menu"><a href="addTruyen"><font color="red">Thêm</font></a></div></th>
		</tr>
		<tbody ng-repeat="x in names | filter:tukhoa" ng-init="x.hienthi=false">
		<tr ng-show="!x.hienthi">
			<td><div align="center">{{x.TenTruyen}}</div></td>
			<td><div align="center">{{x.NoiDung}}</div></td>
			<td><div align="center">{{x.tenTacGia}}</div></td>
			<td><div align="center">{{x.AnHien}}</div></td>
			
			<th width="200"><button onclick="return confirm('bạn có chắc chắn muốn sửa không?')" ng-click="doihienthi(x)">Sửa</button>  <form action="index.php"><button onclick="return confirm('bạn có chắc chắn muốn xóa không?')" ng-click="xoa(x)">Xóa</button></form></th>
		</tr>
		<tr ng-show="x.hienthi">
			<input type="hidden" ng-model="x.idTruyen">
			<td><input type="text" ng-model="x.TenTruyen"></td>
			<td><input type="text" ng-model="x.NoiDung"></td> 
			<td><input type="text" ng-model="x.AnHien"></td>
			<td><input type="text" ng-model="x.tenTacGia"></td>
			<th width="200" ><button ng-click="luudulieu(x)">Update</button></th>
		</tr>
		</tbody>
			
		</table>
</div>
</div>
<script type="text/javascript" src="../route.js" ></script>

</tbody>