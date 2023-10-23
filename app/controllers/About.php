<?php

class About extends Controller
{
  public function index($nama = 'aldi muhammad', $pekerjaan = 'gamer', $umur = 25)
  {
    //echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan, saya berumur $umur tahun.";
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page()
  {
    $data['judul'] = 'Pages';
    $this->view('templates/header', $data);
    //echo 'About/page';
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
