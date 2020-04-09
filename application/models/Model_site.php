<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_site extends CI_Model {

	function __construct(){
		parent::__construct();
  }

  function getConfig($where= ''){
      return $this->db->query("select * from config $where;");
  }

  function count($by){
      switch ($by) {
        case 'total_testi':
        $this->db->select("COUNT(*) as jml");
        $result = $this->db->get('testimoni');
        $result = $result->row_array();
        return $result['jml'];
        break;

        case 'total_alumni':
        $this->db->select("COUNT(*) as jml");
        $result = $this->db->get('alumni');
        $result = $result->row_array();
        return $result['jml'];
        break;

        case 'total_berita':
        $this->db->select("COUNT(*) as jml");
        $result = $this->db->get('berita');
        $result = $result->row_array();
        return $result['jml'];
        break;

        case 'total_agenda':
        $this->db->select("COUNT(*) as jml");
        $result = $this->db->get('agenda');
        $result = $result->row_array();
        return $result['jml'];
        break;

        case 'total_foto':
        $this->db->select("COUNT(*) as jml");
        $result = $this->db->get('galeri');
        $result = $result->row_array();
        return $result['jml'];
        break;

        default:
        return 0;
        break;
    }
}

}
