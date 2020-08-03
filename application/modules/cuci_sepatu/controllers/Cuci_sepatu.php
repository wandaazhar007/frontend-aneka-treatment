<?php defined('BASEPATH') or exit('No direct script access allowed');
class Cuci_sepatu extends MX_Controller
{
  function index()
  {
    $data['title']    = 'Cuci Sepatu';
    $data['contents'] = 'cuci_sepatu';

    $this->load->view('templates/core', $data);
  }
}
