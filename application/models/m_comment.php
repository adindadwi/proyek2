<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_comment extends CI_Model
{
       function __construct()
		 {
		  parent::__construct();
		 }
  
        public function addComment($data)
        {
            $this->db->insert('tb_komen',$data);
        }
         function posts($num,$start)
		{
			$this->db->select();
			$this->db->from('tb_komen');
			$this->db->order_by('time','DESC');
			$this->db->limit($num,$start);
			$query = $this->db->get();
			return $query->result_array();
		}
		function get_com($num,$start)
		{	
			$this->db->select();
			$this->db->from('tb_komen');
			$this->db->limit($num,$start);
			$query = $this->db->get();
			return $query->result_array();
		}
		function get_com_count()
	{
		$this->db->select()->from('tb_komen');
		$query = $this->db->get();
		return $query->num_rows();
	}
}
?>