<?php defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MX_Controller
{
  function index()
  {
    $data['title']    = 'Aneka Treatment';
    $data['contents'] = 'dashboard';

    $this->load->view('templates/core', $data);
  }
}
