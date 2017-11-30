<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_master_menu extends CI_Model 
	{

		public function __construct()
		{
			parent::__construct();
			$this->db = $this->load->database('default', true);	
		}

		public function selectAll() 
		{
			$this->db->select('*');
			$this->db->from('mastermenu as a');
			$this->db->join('mastersubmenu as b','b.id_master = a.id_master');
			$query = $this->db->get();
			if($query->num_rows() > 0){
				$query = $query->result_array();
				$datamenu = array(); $index=0;
				foreach ($query as $value) { $index++;
					$datamenu["tes_".$index] = $value;
					// foreach ($query as $key1 => $value1) {
     //            		$datamenu['submenu'][$key1]['id'] = $value1['id_child'];
     //            		$datamenu['submenu'][$key1]['name'] = $value1['submn_name'];
     //            		$datamenu['submenu'][$key1]['url'] = $value1['submn_url'];
					// }
				}
				return $datamenu;
			}else{
				return false;
			}
		}


		public function all_menu_and_child(){
			$this->db->select('*');
			$this->db->from('mastermenu');
			$this->db->where('activated','ya');
			$this->db->where('is_deleted','tidak');
			$query = $this->db->get();
			if($query->num_rows() > 0){
				$hasil = $query->result_array();
				for($index=0; $index<$query->num_rows(); $index++){
					$hasil[$index]['menu_child'] = $this->menu_child($hasil[$index]['id_master']);
				}
				return $hasil;
			}else{
				return false;
			}
		}

		public function menu_child($parent){
			$this->db->select('*');
			$this->db->from('mastersubmenu');
			$this->db->where('submn_activated','ya');
			$this->db->where('submn_isdeleted','tidak');
			$this->db->where('id_master',$parent);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return false;
			}
		}

	}

?>