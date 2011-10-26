<?php
class Menu extends CI_Controller {

  function index()
  {
    $this->load->view('menu');
  }

  function Menu()
  {
    $this->load->helper(array('form', 'url');

    parent::Controller();
    $this->output->set_header('Content-Type: text/html; charset=UTF-8');
  }

}
?>