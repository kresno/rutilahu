<?php
/**
 *
 */
class M_users extends CI_Model
{

  function __construct()
  {
  }

  function checkAkun($username, $password)
  {
    $this->db->select("id, username");
    $this->db->from("user");
    $this->db->where('username', $username);
    $this->db->where('password', md5($password));
    $this->db->limit(1);
    $query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->result();
		} else {
			return false;
		}
  }

  function insert($data)
  {
    return $this->db->insert("users", $data);
  }

  function update($data, $id){
		return $this->db->update("users", $data, array('id' => $id));
	}

  function delete($id){
		return $this->db->delete("users", array('id' => $id));
	}


}

?>
