<?php
class Shiwake extends CI_Model
{
  var $syear     = 0;
  var $smonth    = 0;
  var $sday      = 0;
  var $karikata  = "";
  var $kashikata = "";
  var $kingaku   = 0;
  var $biko      = "";

  function insert_entry()
  {
    $this->syear = $this->input->post("syear");
    $this->smonth = $this->input->post("smonth");
    $this->sday = $this->input->post("sday");
    $this->karikata = $this->input->post("karikata");
    $this->kashikata = $this->input->post("kashikata");
    $this->kingaku = $this->input->post("kingaku");
    $this->biko = localtime();

    $this->db->insert("shiwake", $this);
  }

}
?>