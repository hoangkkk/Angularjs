<style>
	.Them{
		margin-left: 200px;
		Width:50%;
		border: solid 2px blue;
	}
</style>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<tbody ng-controller="controller5">
	<h1 style="text-align: center; color: red;">Thêm User</h1>
	<div class="Them">
		<table align="center">
			<tr>
				<th>UserName:</th>
				<td><input type="text" ng-model="x.name"></td>
			</tr>
			<tr>
				<th>PassWord:</th>
				<td><input type="text" ng-model="x.pass"></td>
			</tr>
			<tr>
				<th>Email:</th>
				<td><input type="text" ng-model="x.email"></td>
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