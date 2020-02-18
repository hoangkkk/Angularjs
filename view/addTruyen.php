<style>
	.Them{
		margin-left: 200px;
		Width:50%;
		border: solid 2px blue;
	}
</style>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<tbody ng-controller="controller6">
	<h1 style="text-align: center; color: red;">Thêm Truyện</h1>
	<div class="Them">
		<table align="center">
			<tr>
				<th>Tên Truyện:</th>
				<td><input type="text" ng-model="x.TenTruyen"></td>
			</tr>
			<tr>
				<th>Nội Dung:</th>
				<td><input type="text" ng-model="x.NoiDung"></td>
			</tr>
			<tr>
				<th>Ẩn Hiện:</th>
				<td><input type="text" ng-model="x.AnHien"></td>
			</tr>
			<tr>
				<th>Tên Tác Giả:</th>
				<td><input type="text" ng-model="x.tenTacGia"></td>
			</tr>
			<tr>
				<th></th>
				<td></td>
			</tr>
			<tr><th align="center"><form action="index.php"><button ng-click="themDuLieu(x)">Thêm</button></form></th></tr>
		</table>
	</div>
	<script type="text/javascript" src="../route.js" ></script>
</tbody>