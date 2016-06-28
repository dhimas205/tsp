<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class M_user extends CI_Model {

	function GetUser($username,$pass){
		$sql  = "SELECT U.*, A.*, R.* FROM users as U JOIN access as A ON U.id_user = A.user_id ";
		$sql .= "JOIN roles as R ON R.id_role = A.role_id ";
		$sql .= "WHERE U.username = '$username' AND U.password = '$pass'";
		
		$query = $this->db->query($sql);
		//return $query->num_rows();

		if($query->num_rows() == 1){
			return $query->result_array();
		} else {
			return false;
		}
	}

	function UpdateUser($id,$data){
		$data['UpdateBy'] = $_SESSION['User']['Username'];
		return $this->Update("tb_master_user",array('UserId'=>$id),$data);
	}

	function GetUserProfile($ProfileId){
		return $this->Select("tb_master_userprofile",array('ProfileId'=>$ProfileId))[0];	
	}
}
/* eof admin/models/M_user.php */
?>