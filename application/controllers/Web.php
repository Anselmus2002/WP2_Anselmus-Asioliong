<?php
defined('BASEPATH') or exit ('no direct script access allowed');

Class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->loat->view('v_header',$data);
        $this->loat->view('v_index',$data);
        $this->loat->view('v_footer',$data);
    }
    public function about(){
        $data['judul'] = "Halaman About";
        $this->loat->view('v_header',$data);
        $this->loat->view('v_about',$data);
        $this->loat->view('v_footer',$data);
    }
}