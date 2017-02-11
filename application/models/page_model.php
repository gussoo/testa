<?php
//Model para guardar los datos
class Page_model extends CI_Model
{
  function set_report($ascensor, $plata_desde, $planta_va, $hora)
  {
  	 $this->db->query("INSERT INTO resport_ascensor (id, ascensor, planta_accede, planta_va, hora) VALUES ('', '".$ascensor."', '".$plata_desde."', '".$planta_va."', '".$hora."') ");
  }

}