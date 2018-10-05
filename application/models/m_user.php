<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_user extends CI_Model
{
         
        function __construct()
 {
  parent::__construct();
 }
  
        function cek_user_login($username, $password, $rayon)
        {
        $query = "select * from tb_user where username='".$username."' and password='".md5($password)."' and rayon='".$rayon."'";
        $hasil=$this->db->query($query);
 
        if ($hasil->num_rows() == 1) { // jika data = 1
                return $hasil->row_array();
        }
        else
                {
                        return FALSE; // else mengembalikan FALSE
                }
        }
        
        function adminfromdb($username)
        {
		$query = "select * from tb_user where username='".$username."'";
        	$hasil=$this->db->query($query)->result();
        	return $hasil;
		}
		function daftartodb($data)
        {
        	$nama=$data['nama'];
        	$user=$data['user'];
        	$pass=$data['pass'];
		$rayon=$data['rayon'];
        	$foto=$data['gambar'];
        	$query="insert into tb_user values('','".$nama."','".$user."','".$pass."','".$foto."','".$rayon."')";
			$hasil=$this->db->query($query);
			return $hasil;
        }
}
?>