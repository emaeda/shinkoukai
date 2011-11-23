<?php
class Shiwake extends CI_Controller {

  public function index()
  {
    $this->load->helper(array("form", "url"));
    $this->load->view("shiwake");
  }

  public function save()
  {
    $this->load->helper(array("form", "url"));

    $this->load->model("Shiwake");
    $this->Shiwake->insert_entry();

    $this->load->view("shiwake");
  }
}
?>