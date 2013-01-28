<?

class Answer_model extends CI_Model
{
	function _construct()
	{
		parent::_construct();
	}
	
	function get_answer($where)
	{		
		return $this->db->where($where)->get('answer');
	}
	
	function insert_answer($data)
	{
		return $this->db->insert('answer',$data);
	}
	
	function update_answer($where,$data)
	{
		return $this->db->where($where)->update('answer',$data);	
	}
	
	function delete_answer($where)
	{
		return $this->db->where($where)->update('answer');	
	}
}