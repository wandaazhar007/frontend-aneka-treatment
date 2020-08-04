<?php defined('BASEPATH') or exit('No direct script access allowed');
class Price_list extends MX_Controller
{
  function index()
  {
    $data['title']    = 'Price List Aneka Treatment';
    $data['contents'] = 'price_list';

    $this->load->view('templates/core', $data);
  }

  function sepatu()
  {
    $data['title']    = 'Harga Treatment Sepatu';
    $data['contents'] = 'list_sepatu';
    $this->load->view('templates/core', $data);
  }

  function tas()
  {
    $data['title']    = 'Harga Treatment Tas';
    $data['contents'] = 'list_tas';
    $this->load->view('templates/core', $data);
  }

  function helm()
  {
    $data['title']    = 'Harga Treatment Tas';
    $data['contents'] = 'list_helm';
    $this->load->view('templates/core', $data);
  }
}
