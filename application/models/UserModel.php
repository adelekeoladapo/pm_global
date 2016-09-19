<?

	class UserModel extends CI_Model {

		function insertUser($user){ 
	        $this->db->insert('user', $user);
	        return $this->getUser($this->db->insert_id());
	    }
	    
	    function getUsers($sort_field = false, $sort_order_mode = false, $filter_field = false, $filter_value = false, $page = false, $page_size = 25){ 
	        $this->db->select(($filter_field) ? $filter_field : '*');
	        $this->db->order_by($sort_field, $sort_order_mode);
	        ($filter_value) ? $this->db->where($filter_field, $filter_value) : '';
	        ($page) ? $this->db->limit($page_size, $page) : $this->db->limit($page_size);

	        $query = $this->db->get('user');
	        return ($query->num_rows()) ? $query->result() : [];
	    }
	    
	    function getUser($id){
	        $this->db->select('*');
	        $this->db->where('id', $id);
	        $query = $this->db->get('user');
	        return ($query->num_rows()) ? $query->row() : null;
	    }

	    function updateUser($id, $user){ 
	    	$this->db->where('id', $id);
	        $this->db->update('user', $user);
	        return $this->getUser($id);
	    }

	    function deleteUser($id){
	    	$this->db->where('id', $id);
	        return $this->db->delete('user');
	    }

	}

?>