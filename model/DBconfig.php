<?php 
	class Database
	{
	 	private $hostname = 'localhost';
	 	private $username = 'root';
	 	private $pass = '';
	 	private $dbname = 'truyentranh';

	 	private $conn = null;
	 	private $result = null;

	 	public function connect()
	 	{
	 		$this->conn= new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
	 		if (!$this->conn) {
	 			echo "ket noi that bai";
	 			exit();
	 		}
	 		else {
	 			mysqli_set_charset($this->conn, 'utf8');
	 		}
	 		return $this->conn;
	 	}

	 	//thực hiện câu lệnh truy vấn
	 	public function execute($sql)
	 	{
	 		$this->result = $this->conn->query($sql);
	 		return $this->result;
	 	}

	 	//lấy dữ liệu
	 	public function getData()
	 	{
	 		if($this->result){
	 			$data = mysqli_fetch_array($this->result);
	 		}
	 		else {
	 			$data = 0;
	 		}
	 		return $data;
	 	}
		//lấy toàn bộ dữ liệu
	 	public function getAllData($table)
	 	{
	 		$sql = "select* from $table";
	 		$this->execute($sql);
	 		if($this->num_rows()==0){
	 			$data=0;
	 		}
	 		else {
	 			while ($datas = $this->getData()) {
	 			    $data[]= $datas;
	 			}
	 		}
	 		return $data;
	 	}
	 	//lấy dữ liệu theo ID
	 //	public function getDataID($table, $id)
	 	//{
	 		//$sql= "select* from $table 	where idLoai='$id'";
	 		//$this->execute($sql);
	 		//if($this->num_rows()!==0){
	 		//	$data = mysqli_fetch_array($this->result);
	 	//	}
	 		//else {
	 		//	$data = 0;
	 	//	}
	 	//	return $data;
	 //	}
	 	// phương thức đếm số bản ghi
	 	public function num_rows()
	 	{
			if ($this->result) {
				$num = mysqli_num_rows($this->result);
			}
			else{
				$num=0;
			}
			return $num;

	 	}


	 	//phương thức thêm dữ liệu Loại
	 	public function insertData($tenLoai, $AnHien)
	 	{
	 		$sql ="INSERT INTO theloai(idLoai,tenLoai, AnHien )	VALUES(null,'$tenLoai','$AnHien') ";
	 		return	$this->execute($sql);
	 	}

	 	//phương thức thêm dữ liệu Truyện
	 	//public function insertDataTruyen($tenTruyen, $NoiDung, $AnHien, $tenTacGia)
	 	//{
	 	//	$sql ="INSERT INTO truyen(idTruyen, TenTruyen, NoiDung, AnHien, tenTacGia )	VALUES(null,'$tenTruyen','$NoiDung', ' $AnHien', '$tenTacGia') ";
	 	//	return	$this->execute($sql);
	 	//}
	 	//phương thức thêm dữ liệu Truyện
	 	public function insertDataTruyen($tenTruyen, $NoiDung, $AnHien, $tenTacGia)
	 	{
	 		$sql ="INSERT INTO truyen(idTruyen, TenTruyen, NoiDung, AnHien, tenTacGia)	VALUES(null,'$tenTruyen','$NoiDung', ' $AnHien', '$tenTacGia') ";
	 		return	$this->execute($sql);
	 	}




	 	//phương thức thêm dữ liệu User
	 	public function insertDataUser($name, $pass, $email)
	 	{
	 		$sql ="INSERT INTO user(idUser, name, pass, email)	VALUES(null,'$name','$pass', ' $email') ";
	 		return	$this->execute($sql);
	 	}
	 //	public function APIupdatedata()
	 	//{
	 		//lay du lieu ve
		//	$id= isset($_POST['id']) ? $_POST['id'] : NULL;
			//$tenLoai = isset($_POST['tenLoai']) ? $_POST['tenLoai'] : NULL;
			//$AnHien= isset($_POST['AnHien']) ? $_POST['AnHien'] : NULL;
			//$this->updateData($id, $tenLoai, $AnHien);
			//echo $tenLoai;
			//echo $AnHien;
	 	//}
//
	 	//phương thức update dữ liệu
	 	
	 	public function updateData($idLoai, $tenLoai, $AnHien)
	 	{
	 		$sql ="UPDATE theloai set tenLoai='$tenLoai', AnHien='$AnHien' where idLoai= '$idLoai'";
	 		return	$this->execute($sql);
	 	}
	 	//phương thức update dữ liệu Truyện
	 	
	 	public function updateDataTruyen($idTruyen, $tenTruyen, $NoiDung, $AnHien, $tenTacGia)
	 	{
	 		$sql ="UPDATE truyen set TenTruyen='$tenTruyen', NoiDung='$NoiDung', AnHien='$AnHien', tenTacGia='$tenTacGia'  where idTruyen= '$idTruyen'";
	 		return	$this->execute($sql);
	 	}
	 	//phương thức update dữ liệu
	 	
	 	public function updateDataUser($idUser, $name, $pass, $email)
	 	{
	 		$sql ="UPDATE user set name='$name', pass='$pass', email='$email' where idUser= '$idUser'";
	 		return	$this->execute($sql);
	 	}


	 	//phương thức delete dữ liệu
	 	
	 	public function delete($idLoai)
	 	{
	 		$sql ="DELETE FROM theloai where idLoai= '$idLoai'";
	 		return	$this->execute($sql);
	 	}
	 	public function deleteTruyen($idTruyen)
	 	{
	 		$sql ="DELETE FROM truyen where idTruyen= '$idTruyen'";
	 		return	$this->execute($sql);
	 	}
	 	public function deleteUser($idUser)
	 	{
	 		$sql ="DELETE FROM user where idUser= '$idUser'";
	 		return	$this->execute($sql);
	 	}


	}
?>