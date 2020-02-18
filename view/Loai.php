
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<tbody ng-controller="controller1">

<div >
	<p style="text-align:; font-weight: bold;">Tìm Thể Loại Truyện:</p>
	<div style="text-align:;"><input type="text" ng-Model="tukhoa"></div>
	<p style="text-align: center; font-weight: bold;">Bảng Thể Loại Truyện</p>
	<div>
		<table border="1" width="100%" cellspacing="0">
		<tr bgcolor="#0FF">
			<th >Tên Loại</th>
			<th >Ẩn Hiện</th>
			<th width="200" ><div class="menu">
			  <div align="center"><a href="themTL"><font color="red">Thêm</font></a></div>
		  </div></th>
		</tr>
		<tbody ng-repeat="x in names | filter:tukhoa" ng-init="x.hienthi=false">
		<tr ng-show="!x.hienthi">
			<td><div align="center">{{x.tenLoai}}</div></td>
			<td><div align="center">{{x.AnHien}}</div></td>
			<th width="200"><button onclick="return confirm('bạn có chắc chắn muốn sửa không?')" ng-click="doihienthi(x)">Sửa</button>  <form action="index.php"><button onclick="return confirm('bạn có chắc chắn muốn xóa không?')" ng-click="xoa(x)">Xóa</button></form></th>
		</tr>
		<tr ng-show="x.hienthi">
			<input type="hidden" ng-model="x.idLoai">
			<td><input type="text" ng-model="x.tenLoai"></td>
			<td><input type="text" ng-model="x.AnHien"></td> 
			<th width="200" ><button ng-click="luudulieu(x)">Update</button></th>
		</tr>
		</tbody>
			
		</table>
</div>
</div>
<script type="text/javascript" src="../route.js" ></script>

</tbody>