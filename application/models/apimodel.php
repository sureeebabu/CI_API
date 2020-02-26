<?php
class apimodel extends CI_Model 
{

	
	function getData()
	{
		$query = $this->db->query("select * from pagemaster order by pageID asc");
		return $query->result();
	}

	

}