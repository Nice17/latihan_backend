<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    echo  "ini controler home method index";
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */