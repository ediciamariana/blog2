<?PHP

class Postagem extends CI_Model
{
	
	function get($id=null)
	id($id){

		$this->db->where('id', $id);
		$query = $this->db->get('postagem');

	}else{
		$query = $this->db->get('postagem');
		return $query->result_array();
	}
}

